<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    // This function will return users who registered in this month or week
    public function index($period)
    {
        // // except 'week' & 'month', this query will return 404 page
        // if (!in_array($period, ['week', 'month'])) {
        //     abort(404);
        // }


        $users = User::query()
            ->when($period == 'week', function ($q) {
                $q->where('created_at', '>', now()->subWeek());
            }) // returns the users of this week

            ->when($period == 'month', function ($q) {
                $q->where('created_at', '>', now()->subMonth());
            }) // returns the users of this month

            ->paginate();

        return $users;
    }
}
