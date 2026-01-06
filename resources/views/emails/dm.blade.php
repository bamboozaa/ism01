<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor of Management (DM)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            color: #333;
        }

        .header {
            background-color: #f4f4f4;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-info {
            margin-top: 20px;
            font-style: italic;
        }

        .document-list {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #007bff;
        }

        .signature {
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    @php
        // Provide safe defaults when the view is rendered without data (e.g., preview routes)
        $testMailData = $testMailData ?? ['name' => 'Applicant'];
    @endphp
    <div class="container">
        <div class="header">
            <h1>Thank You for Your Inquiry</h1>
            <h2>Doctor of Management (DM)</h2>
        </div>

        <p>Dear {{ $testMailData['name'] }},</p>

        <p>Thank you for your interest in the Doctor of Management (DM) Program (International Program) at the
            International School of Management (ISM), University of the Thai Chamber of Commerce (UTCC).</p>

        <p>The DM program is designed for professionals looking to enhance their expertise in management. This 3-year
            doctoral program includes core courses (18 credits) and a dissertation (36 credits). Classes are held on
            weekends (Saturdays and Sundays) from 9:00 AM to 5:00 PM.</p>

        <p>For further details about the program, please visit: <a href="https://ism.utcc.ac.th/doctor-ism/">Program
                Details</a><br>
            For tuition fees and related information, please visit: <a href="https://ism.utcc.ac.th/fees/">Fees
                Information</a></p>

        <h3>Application Process and Required Documents</h3>

        <div class="document-list">
            <p>To apply, please submit the following documents:</p>
            <ul>
                <li>Certificate of your master's degree</li>
                <li>Transcript of your master's degree</li>
                <li>English proficiency test result (TOEFL, IELTS, TOEIC, or CU TEP)</li>
                <li>Research proposal (if available)</li>
                <li>Three letters of recommendation</li>
                <li>A copy of your national ID card/passport</li>
                <li>Completed application form</li>
            </ul>
        </div>

        <p>Please ensure that all required documents are submitted to <strong>ism@utcc.ac.th</strong>. Upon receipt of
            your application, we will contact you to schedule an interview.</p>

        <p>Should you require any additional information or have questions regarding the application process, please
            feel free to reply to this email. We are happy to assist you.</p>

        <div class="signature">
            <p>Best regards,<br>
                ISM Admissions Team<br>
                International School of Management<br>
                University of the Thai Chamber of Commerce</p>
        </div>

        <div class="contact-info">
            <p>Contact: ism@utcc.ac.th</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
