<?php
    namespace App\Http\Libs;

    class Rules {
        public function userRegisterRule() {
            return [
                'email' => ['required', 'string', 'email', 'unique:users,email'],
                'password' => ['required', 'string', 'min:3']
            ];
        }
        public function deviceCreateRule() {
            return [
                'name' => ['required', 'string', 'max:30'],
                'pin' => ['required', 'integer','unique:devices'],
                'status' => ['required', 'boolean'],
                'device_type_id' => ['required', 'integer', 'exists:device_types,id']
            ];
        }
        public function deviceTypeCreateRule() {
            return [
                'name' => ['required', 'max:30', 'unique:device_types,name']
            ];
        }
    }
?>