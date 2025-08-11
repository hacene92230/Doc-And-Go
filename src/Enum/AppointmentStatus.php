<?php

namespace App\Enum;

enum AppointmentStatus: string
{
    case CONFIRMED = 'confirmé';
    case IN_PROGRESS = 'en cours';
    case POSTPONED = 'reporté';
    case CANCELLED = 'annuler';
    case NOT_HONOURED = 'non honoré';
}
