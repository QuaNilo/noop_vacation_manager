<!-- User Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $userTeamRequests->getAttributeLabel('user_id') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $userTeamRequests->user_id }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Team Id Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $userTeamRequests->getAttributeLabel('team_id') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $userTeamRequests->team_id }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



<!-- Approved Field -->
<div class="grid grid-cols-1 md:grid-cols-3">
    <dt class="font-medium md:col-span-1">{{ $userTeamRequests->getAttributeLabel('approved') }}</dt>
    <dd class="text-slate-500 dark:text-slate-300 md:col-span-2">{{ $userTeamRequests->approved }}</dd>
</div>
<div class="mt-5 w-full border-t border-slate-200/60 dark:border-darkmode-400 last-of-type:hidden"></div>



