<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bachelor of Accountancy (B.Acc)</title>
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

        .application-steps {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #007bff;
        }

        .step {
            margin-bottom: 15px;
        }

        .signature {
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Your Inquiry</h1>
            <h2>Bachelor of Accountancy (B.Acc)</h2>
        </div>
        <p>Dear {{ $testMailData['name'] }},</p>

        <p>Thank you for reaching out and expressing your interest in the Bachelor of Accountancy (B.Acc) at the
            International School of Management (ISM), University of the Thai Chamber of Commerce (UTCC).</p>

        <p>Our B.Acc program is a 4-year international course with intakes in both August and January.</p>

        <p>For more detailed information about the program, please visit: <a
                href="https://ism.utcc.ac.th/bacc-ism/">Program Details</a><br>
            For tuition fees and related details, please visit: <a href="https://ism.utcc.ac.th/fees/">Fees
                Information</a></p>

        <h3>Application Process</h3>

        <div class="application-steps">
            <div class="step">
                <h4>Step 1: Complete the Application Form</h4>
            </div>

            <div class="step">
                <h4>Step 2: Submit the Following Documents</h4>
                <ul>
                    <li>High School Certificate (Original & English version)</li>
                    <li>High School Transcript (Original & English version)</li>
                    <li>English Proficiency Test Scores (IELTS, TOEFL, etc.) (if available)</li>
                    <li>Copy of Passport</li>
                </ul>
            </div>

            <div class="step">
                <h4>Step 3: Send Documents</h4>
                <p>Send all required documents to: <strong>ism@utcc.ac.th</strong></p>
            </div>
        </div>

        <p>If you have any further questions or need assistance, feel free to contact us. We look forward to supporting
            you throughout the application process and welcoming you to ISM!</p>

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
