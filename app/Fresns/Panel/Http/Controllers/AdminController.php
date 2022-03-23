<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

namespace App\Fresns\Panel\Http\Controllers;

use App\Fresns\Panel\Http\Requests\StoreAdminRequest;
use App\Models\Account;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Account::ofAdmin()->get();

        return view('FsView::dashboard.admins', compact('admins'));
    }

    public function store(StoreAdminRequest $request)
    {
        $accountName = $request->accountName;

        filter_var($accountName, FILTER_VALIDATE_EMAIL) ?
            $credentials['email'] = $accountName :
            $credentials['phone'] = $accountName;

        $admin = Account::where($credentials)->where('is_enable', 1)->first();

        if (! $admin) {
            return back()->with('failure', __('FsLang::tips.account_not_found'));
        }

        $admin->type = 1;
        $admin->save();

        return $this->createSuccess();
    }

    public function destroy(Request $request, Account $admin)
    {
        $admin->type = 3;
        $admin->save();

        return $this->deleteSuccess();
    }
}