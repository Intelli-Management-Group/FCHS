<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title>Job Application - Licensed Practical Nurse</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .error-box {
        background: #fff9f9;
        border: 1.5px solid #c02b0a;
        border-radius: 5px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, .11), 0 0 4px rgba(18, 25, 97, .041);
        margin-bottom: 8px;
        margin-top: 8px;
        padding: 10px 16px 10px 28px;
        position: relative;
        width: 100%;
    }

    .simple-box {
        background: #E9ECEF;
        border: 1px solid #CCCCCC;
        border-radius: 5px;
        margin-bottom: 8px;
        margin-top: 8px;
        padding: 10px 16px 10px 28px;
        position: relative;
        width: 100%;
    }

    .title {
        color: #634da0
    }
    .form-label, .form-check, .form-select{
        font-family: 'Poppins', sans-serif !important;
        font-weight: normal !important;
        color: #787878 !important;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="preloader"></div>
        <?php include 'header.php'; ?>
        <div class="container mt-5 mb-5">
            <form id="jobTitleForm" class="needs-validation" action="send-job-title-mail.php" method="post" novalidate>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title jobUpperSpace">Licensed Practical Nurse Application</h1>
                        <!--<h6 class="form-label mt-5">Job Title</h6>-->
                        <!--<div class="simple-box">-->
                        <!--    Neighborhood Health Team Lead Nurse - Home Care, Island of Montreal, West-Island, North Shore and South Shore-->
                        <!--</div>-->
                        <!--<h6 class="mt-4">Please enter all relevant personal information in the fields below</h6>-->

                        <div class="row mt-5">
                            <div class="col-md-6 col-sm-12">
                                <h6 for="fname" class=" form-label">First Name</h6>
                                <input type="text" class="form-control" id="fname" name="fname" required>
                                <div class="invalid-feedback error-box">
                                    This field is required. Please complete the following fields: First, Last.
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 colTopMargin">
                                <h6 for="lname" class="form-label">Last Name</h6>
                                <input type="text" class="form-control" id="lname" name="lname" required>
                                <div class="invalid-feedback error-box">
                                    This field is required. Please complete the following fields: First, Last.
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-12">
                                <h6 for="email" class=" form-label">Email</h6>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                             <div class="col-md-6 col-sm-12 colTopMargin">
                                <h6 for="tel" class=" form-label">Phone</h6>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                        </div>

           

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="address" class=" form-label">Address</h6>
                                <input type="text" class="form-control" id="address" name="address" required>
                                <!--<h6 for="saddress" class="mt-4">Address Line 2</h6>-->
                                <!--<input type="text" class="form-control " id="saddress" name="saddress" required>-->

                                <div class="row mt-4">
                                    <div class="col-md-4 col-sm-12">
                                        <h6 for="city" class=" form-label">City</h6>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </div>
                                    <div class="col-md-4 col-sm-12 colTopMargin">
                                        <h6 for="state" class="form-label">Province</h6>
                                        <input type="text" class="form-control" id="state" name="state" required>
                                    </div>
                                     <div class="col-md-4 col-sm-12 colTopMargin">
                                        <h6 for="zip" class=" form-label">Postal Code</h6>
                                        <input type="text" class="form-control" id="zip" name="zip" required>
                                    </div>
                                </div>

                                <div class="invalid-feedback error-box">
                                    This field is required. Please complete the following fields: Street Address, City,
                                    State / Province, ZIP / Postal Code, Country.
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="question1" class=" form-label">What do you love most about caregiving?</h6>
                                <textarea class="form-control" id="question1" name="answer1" required rows="2"> </textarea>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="question2" class=" form-label">Why do you feel you would be a good Licensed Practical Nurse?</h6>
                                <textarea class="form-control" id="question2" name="answer2" required  rows="2"> </textarea>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="question3" class=" form-label">What is the most important thing you seek from
                                    an employer?</h6>
                                <textarea class="form-control" id="question3" name="answer3" required  rows="2"> </textarea>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 class="form-label">What kind of hours are you seeking?
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="employer" id="fulltime"
                                        value="fulltime" required>
                                    <label class="form-check-label" for="fulltime">Full time</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="employer" id="parttime" value="parttime"
                                        required>
                                    <label class="form-check-label" for="parttime">part time</label>
                                </div>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 class="form-label"> I travel by:
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="travel" id="personal"
                                        value="personal" required>
                                    <label class="form-check-label" for="personal">A personal car</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="travel" id="ride" value="ride"
                                        required>
                                    <label class="form-check-label" for="ride">Get a ride</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="travel" id="public"
                                        value="public" required>
                                    <label class="form-check-label" for="public">take public transit</label>
                                </div>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="select1" class=" form-label">If you were successfully hired, what things will
                                    motivate you the most in your job?</h6>
                                <select class="form-select mt-2" aria-label="Default select example" name="motivation">
                                    <option value="Flexible">Flexible schedule</option>
                                    <option value="Wage">Wage or salary</option>
                                    <option value="Extended">Extended Health Benefits</option>
                                    <option value="Rewarding">Rewarding work</option>
                                    <option value="Working">Working with good families</option>
                                    <option value="Support">Support and mentoring from the office</option>
                                    <option value="Team">Team environment</option>
                                    <option value="Recognition">Recognition</option>
                                </select>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="select2" class=" form-label">How did you hear about us?</h6>
                                <select class="form-select mt-2" aria-label="Default select example"
                                    name="information_source">
                                    <option value="Word">Word of Mouth</option>
                                    <option value="Job">Job Board</option>
                                    <option value="Career">Career Fair</option>
                                    <option value="Career">Career</option>
                                    <option value="Full">Full Care Health Services Employee</option>
                                    <option value="Social">Social Media</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="invalid-feedback error-box">
                                    This field is required.
                                </div>
                            </div>
                        </div>

                        <div class="btn-box mt-4 mb-5" style="margin-top: 20px">
                            <button type="submit" class="theme-btn btn-style-one mb-3">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php include 'footer.php' ?>
    </div>

    <script>
    // JavaScript to handle form submission and validation
    const form = document.getElementById('jobTitleForm');

    form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
    </script>
</body>

</html>