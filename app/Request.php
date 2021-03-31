<?php

namespace App;

use App\Notifications\NewRequest;
use App\Scopes\ParentScope;
use App\Scopes\ServiceStatusScope;
use App\Scopes\SupervisorScope;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Request extends Model
{
    use LogsActivity;

    protected $guarded = [];
    protected $casts = [
        "created_at" => "date:Y-m-d"
    ];

    protected static $logUnguarded = true;

    public function getDescriptionForEvent(string $eventName): string
    {
        $baseName = class_basename(__CLASS__);
        return "$baseName has been {$eventName}";
    }

    protected static function booted()
    {
        parent::booted(); // TODO: Change the autogenerated stub
        static::addGlobalScope(new ParentScope());

        static::creating(static function ($model){
            $model->company_id = Company::companyID();

            $employee = $model->employee;
            $supervisor = $employee->department->supervisor;
            if(isset($supervisor)){
                $supervisor->notify(new NewRequest());
            }
        });

        static::deleting(function($request){
            $request->requestable->delete();
        });
    }

    public function type()
    {
        $type = '';
        switch ($this->requestable_type){
            case "App\\AttendanceForgotten":
                $type = __('Attendance Forgotten Request');
                break;
            case "App\\Vacation":
                $type = __('Vacation Request');
                break;
        }
        return $type;
    }

    public function statusClass()
    {
        $class ='';
        switch ($this->status){
            case 0:
                $class = 'kt-badge--primary';
                break;
            case 1:
                $class = 'kt-badge--success';
                break;
            case 2:
                $class = 'kt-badge--danger';
                break;
        }
        return $class;
    }

    public function statusTitle()
    {
        $title ='';
        switch ($this->status){
            case 0:
                $title = __('Pending');
                break;
            case 1:
                $title = __('Approved');
                break;
            case 2:
                $title = __('Disapproved');
                break;
        }
        return $title;
    }
    public function requestable()
    {
        return $this->morphTo();
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class)->withoutGlobalScopes([ServiceStatusScope::class, SupervisorScope::class]);
    }
}