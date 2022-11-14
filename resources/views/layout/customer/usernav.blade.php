@yield('usernav')
	<ul class="lft-nav">
		<li><a href="{{ route('customer_sent-rfp-acc') }}">Sent RFPs</a></li>
		<li><a href="{{ route('customer_received-proposals') }}">Received Proposals</a></li>
		<li><a href="{{ route('customer_saved-venues') }}">Saved Venues</a></li>
		<li><a href="{{ route('customer_saved-rfp') }}">Saved RFP</a></li>
		<li><a href="{{ route('customer_account-info-edit') }}" class="active">Account Information</a></li>
	</ul>