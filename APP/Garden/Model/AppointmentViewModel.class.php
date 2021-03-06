<?php
namespace Garden\Model;
use Think\Model\ViewModel;

class AppointmentViewModel extends ViewModel{
    protected $viewFields = array(
        'appointment' => array('aid','guest_id','fixer_id','fixer2_id','fixer3_id','fixer4_id','model','issues','addtime','status','result','_type'=>'LEFT'),
        'garden_users'  => array('uid'=>'uid','truename'=>'fixer_name','_on'=>'garden_users.uid=appointment.fixer_id'),
        'appointment_users'  => array('guest_id','number'=>'guest_number','mobile'=>'guest_mobile','qq'=>'guest_qq','truename'=>'guest_name','_on'=>'appointment_users.guest_id=appointment.guest_id'),
    );
}