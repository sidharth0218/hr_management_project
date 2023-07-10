<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <img src="https://www.bmninfotech.com/wp-content/uploads/2021/07/cropped-logo.png" height="75px" width="80px">
                <h4>{{ $invoiceData['employee'] }}</h4>
                <h4>{{ $invoiceData['address'] }}</h4>
                <h4>{{ $invoiceData['email'] }}</h4>
                <h4>{{ $invoiceData['phone'] }}</h4>
                <h4>{{ $invoiceData['joining_date'] }}</h4>
                
    </div>

<p> Recipient's Name
    Recipient's {{ $invoiceData['designation'] }}/{{ $invoiceData['department'] }}
    TCS
    Bengluru</p>



Dear <h4>{{ $invoiceData['employee'] }}</h4>,
<p> 
    I am writing to formally accept the offer extended to me for the position of {{ $invoiceData['designation'] }} at TCS. I am thrilled and honored to have been selected for this role, and I am eager to contribute my skills and expertise to the team.
    
    I would like to confirm my acceptance of the offer and express my gratitude for the opportunity to join TCS. After careful consideration, I am confident that this position aligns perfectly with my career aspirations, and I am excited to make a meaningful contribution to the company's success.
    
    As discussed during the interview process, I understand that my start date will be on {{ $invoiceData['joining_date'] }}, and I will report to Michal. Please let me know if any additional paperwork or documentation is required before my start date.
    
    I would like to take this opportunity to express my appreciation for the professionalism and warmth I experienced throughout the interview process. It has given me great confidence in my decision to join TCS, and I am genuinely excited to begin this new chapter.
    
    I am attaching the signed copy of the employment contract, as requested, along with any other relevant documents. If there are any further forms or information needed, please do not hesitate to let me know, and I will promptly provide them.
    
    I look forward to working with the talented individuals at TCS, contributing to the organization's growth, and achieving mutual success. Once again, thank you for this incredible opportunity, and I am eager to begin my employment with TCS.
    
    Please feel free to reach out to me at {{ $invoiceData['phone'] }} or {{ $invoiceData['email'] }} if you require any additional information or have any further instructions.
    
    Thank you for your attention, and I look forward to joining TCS.</p>

Yours sincerely,

{{ $invoiceData['employee'] }}
</body>
</html>





