<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XMBA program</title>
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

        .english-scores {
            margin-left: 20px;
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
            <h2>XMBA Program</h2>
        </div>

        <p>Dear {{ $testMailData['name'] }},</p>

        <p>Thank you for reaching out and expressing your interest in the XMBA program at the International School of
            Management (ISM), University of the Thai Chamber of Commerce (UTCC).</p>

        <p>The XMBA program is designed for professionals with a minimum of two years of work experience. Classes are
            held on Saturdays from 8:30 am to 6:00 pm.</p>

        <p>For further details about the program, please visit: <a href="https://ism.utcc.ac.th/mba-x/">Program
                Details</a><br>
            For tuition fees and related information, please visit: <a href="https://ism.utcc.ac.th/fees/">Fees
                Information</a></p>

        <h3>Application Process and Required Documents</h3>

        <div class="document-list">
            <p>The following documents are required for the application:</p>
            <ul>
                <li>Copy of your bachelor's degree certificate (in English)</li>
                <li>Copy of your bachelor's degree transcripts (in English)</li>
                <li>Curriculum Vitae (CV) and work references</li>
                <li>English proficiency test result, with one of the following minimum scores:
                    <ul class="english-scores">
                        <li>IELTS (Academic Band): Minimum score of 5.5 with no band lower than 5</li>
                        <li>TOEFL (Paper-Based Test): Minimum score of 500</li>
                        <li>TOEFL (Computer-Based Test): Minimum score of 173</li>
                        <li>TOEFL (Internet-Based Test): Minimum score of 61</li>
                        <li>CUTEP: Minimum score of 500</li>
                        <li>UTCC BEST: Minimum score of 500</li>
                    </ul>
                </li>
                <li>Motivation/personal statement letter</li>
                <li>One recommendation letter</li>
                <li>Completed application form</li>
                <li>Copy of your national ID card/passport</li>
            </ul>
        </div>

        <p>Please ensure that you complete the application form and submit all required documents to
            <strong>ism@utcc.ac.th</strong>. We will contact you to schedule an interview once your application is
            received.</p>

        <p>Should you require any assistance or further clarification regarding the application process, please feel
            free to reply to this email. We are happy to assist you.</p>

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
