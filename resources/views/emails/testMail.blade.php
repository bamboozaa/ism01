<!DOCTYPE html>
<html>
<head>
    <title>Enquiry Form</title>
</head>
<body>
    <h1>{{ $testMailData['title'] }}</h1>
    <p>Create Date : {{ $testMailData['create_date'] }}</p>
    <p>Name : {{ $testMailData['name'] }}</p>
    <p>Email : {{ $testMailData['email'] }}</p>
    <p>Direct Message : {{ $testMailData['message'] }}</p>
    <p>https://admissionism.utcc.ac.th/enquiries/{{ $testMailData['id'] }}</p>
    <p><a href="https://admission.utcc.ac.th/enquiries">List all</a></p>
</body>
</html>
