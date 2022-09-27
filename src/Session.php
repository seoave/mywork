<?php

    namespace App;

    class Session
    {
        public static function activateSession(): void
        {
            if (session_status() !== 2) {
                session_start();
            }
        }
    }
