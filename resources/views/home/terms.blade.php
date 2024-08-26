@extends('base')

@section('title', 'Terms and Conditions')

@section('content')

<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        margin-top: 50px;
    }
</style>
</head>
<body>

<div class="container">
<h3 class="text-center mt-4">Terms and Conditions of Use</h3>

<p class="text-muted text-center mb-4" id="date"></p>

<h5>1. License</h5>
<p>Unless otherwise stated, {{ config('app.name') }}  and/or its licensors own the intellectual property rights for all material on {{ config('app.name') }} . All intellectual property rights are reserved. You may view and/or print pages from {{ config('app.name') }}  for your own personal use subject to restrictions set in these terms and conditions.</p>
<p>You must not:</p>
<ul>
    <li>Republish material from {{ config('app.name') }} </li>
    <li>Sell, rent or sub-license material from {{ config('app.name') }} </li>
    <li>Reproduce, duplicate or copy material from {{ config('app.name') }} </li>
</ul>
<p>Redistribution or republication of any part of this site or its content is prohibited, including such by framing or other similar or any other means, without the express written consent of {{ config('app.name') }} . {{ config('app.name') }}  reserves the right to refuse service, terminate accounts, and/or cancel orders at its discretion, including, without limitation, if {{ config('app.name') }}  believes that customer conduct violates applicable law or is harmful to the interests of {{ config('app.name') }} .</p>

<h5>2. User Content</h5>
<p> You retain ownership of any intellectual property rights that you hold in the content you submit to the {{ config('app.name') }}  website ("User Content"). When you submit User Content to {{ config('app.name') }} , you grant {{ config('app.name') }}  a worldwide, non-exclusive, royalty-free, fully-paid, transferable, and sublicensable license to use, copy, modify, publicly perform, publicly display, distribute, and create derivative works of your User Content, subject to the limitations of {{ config('app.name') }} 's Privacy Policy.</p>

<h5>3. User Conduct</h5>
<p>By using the {{ config('app.name') }}  website, you agree not to:

    Use the {{ config('app.name') }}  website for any illegal purpose or in violation of any local, state, national, or international law;
    Violate, or encourage others to violate, any right of a third party, including by infringing or misappropriating any third party intellectual property right;
    Interfere with security-related features of the {{ config('app.name') }}  website, including by: (i) disabling or circumventing features that prevent or limit use or copying of any content, or (ii) reverse engineering or otherwise attempting to discover the source code of any portion of the {{ config('app.name') }}  website except to the extent that the activity is expressly permitted by applicable law;
    Interfere with the operation of the {{ config('app.name') }}  website or any user's enjoyment of the {{ config('app.name') }}  website, including by: (i) uploading or otherwise disseminating any virus, adware, spyware, worm, or other malicious code, (ii) making any unsolicited offer or advertisement to another user of the {{ config('app.name') }}  website, (iii) attempting to collect personal information about another user or third party without consent, or (iv) interfering with or disrupting any network, equipment, or server connected to or used to provide the {{ config('app.name') }}  website, or violating any regulation, policy, or procedure of any such network, equipment, or server;
    Perform any fraudulent activity including impersonating any person or entity, claiming false affiliations, accessing the accounts of others without permission, or falsifying your identity or any information about you, including age or date of birth;
    Attempt to do any of the acts described in this Section, or assist or permit any person in engaging in any of the acts described in this Section.
</p>

<h5>4. Disclaimer</h5>
<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties, and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:

    Limit or exclude our or your liability for death or personal injury resulting from negligence;
    Limit or exclude our or your liability for fraud or fraudulent misrepresentation;
    Limit any of our or your liabilities in any way that is not permitted under applicable law; or
    Exclude any of our or your liabilities that may not be excluded under applicable law.
    The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or in relation to the subject matter of this disclaimer, including liabilities arising in contract, in tort (including negligence) and for breach of statutory duty.
</p>
</div>

</body>
<script>

    var today = new Date();
    var date = today.getDate() + '/' + (today.getMonth()+1) + '/' + today.getFullYear();


    document.getElementById("date").innerHTML = "Last updated: " + date;
</script>
@endsection
