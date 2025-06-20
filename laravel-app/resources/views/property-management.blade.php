@extends('layouts.main')

@section('title', 'Rental Application - Prime Real Estate')

@section('content')

@include('includes.navbar2')

<!-- Top Hero Section -->
<div class="pt-5 mt-navbar-adjust" style="background-color: #eaf6fc;">
    <div class="container text-center py-4">

        <!-- Main Heading -->
        <h1 class="fw-bold text-danger mb-3" style="font-size: 2.5rem;">
            RENTAL APPLICATION
        </h1>

        <!-- Subheading -->
        <p class="text-muted mb-4" style="font-size: 1.05rem;">
            THE UNDERSIGNED HEREBY MAKES APPLICATION FOR A HOUSING UNIT AS INDICATED BELOW
        </p>

        <!-- Download Button -->
        <a href="{{ asset('assets/img/rental-application.pdf') }}" target="_blank" class="btn btn-outline-danger px-4 py-2">
            Download Rental Application (PDF)
        </a>

    </div>
</div>

<!-- Application Form -->
<section class="py-5" style="background-color: #eaf6fc;">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('rental.send') }}" class="bg-white p-4 rounded shadow-sm">
            @csrf

            <!-- Applicant Info -->
            <h4 class="fw-bold mb-4 text-danger">Applicant Information</h4>
            <div class="row g-3 mb-4">
                <div class="col-md-12"><input type="text" class="form-control" placeholder="Address being applied for *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Monthly rent amount *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Credit Score *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="First Name *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Last Name *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Date of Birth *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="SSN *"></div>
                <div class="col-md-12"><input type="text" class="form-control" placeholder="Full Address *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Cell"></div>
                <div class="col-md-6"><input type="email" class="form-control" placeholder="Email"></div>
            </div>

            <!-- Co-Applicant -->
            <h4 class="fw-bold mb-4 text-danger">Co-Applicant</h4>
            <div class="row g-3 mb-4">
                <div class="col-md-6"><input type="text" class="form-control" placeholder="First Name *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Last Name *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Date of Birth *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="SSN *"></div>
                <div class="col-md-12"><input type="text" class="form-control" placeholder="Full Address *"></div>
                <div class="col-md-6"><input type="text" class="form-control" placeholder="Cell"></div>
                <div class="col-md-6"><input type="email" class="form-control" placeholder="Email"></div>
            </div>

            <!-- Persons to Reside -->
            <h4 class="fw-bold mb-4 text-danger">Persons to Reside</h4>
            @foreach(['Names', 'Relationship to Head', 'Occupation', 'Driver’s License #'] as $label)
                <label class="form-label">{{ $label }}</label>
                <div class="row g-3 mb-3">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Person {{ $i + 1 }}">
                        </div>
                    @endfor
                </div>
            @endforeach

            <!-- Residency History -->
            <h4 class="fw-bold mb-4 text-danger">Residency History</h4>
            <div class="row g-3 mb-3">
                <div class="col-md-12"><input type="text" class="form-control" placeholder="How long at your current address?"></div>
                <div class="col-md-12"><input type="text" class="form-control" placeholder="Do you own / rent / other (explain)"></div>
            </div>
            <label class="form-label">Current Landlord</label>
            <div class="row g-3 mb-3">
                <div class="col-md-4"><input type="text" class="form-control" placeholder="Name"></div>
                <div class="col-md-4"><input type="text" class="form-control" placeholder="Address"></div>
                <div class="col-md-4"><input type="text" class="form-control" placeholder="Telephone"></div>
            </div>

            @for ($i = 0; $i < 2; $i++)
                <label class="form-label">Previous Landlord</label>
                <div class="row g-3 mb-3">
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Name"></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Address"></div>
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="Telephone"></div>
                </div>
            @endfor

            <!-- Employment/Income -->
            <h4 class="fw-bold mb-4 text-danger">Employment/Income Information</h4>
            <h6 class="text-dark">Applicant</h6>
            <div class="row g-3 mb-3">
                @foreach(['Name of Employer', 'Address of Employer', 'Telephone', 'Position Held', 'Year on Job', 'Supervisor’s Name'] as $field)
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="{{ $field }}"></div>
                @endforeach
            </div>

            <h6 class="text-dark mt-3">Co-Applicant</h6>
            <div class="row g-3 mb-3">
                @foreach(['Name of Employer', 'Address of Employer', 'Telephone', 'Position Held', 'Year on Job', 'Supervisor’s Name'] as $field)
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="{{ $field }}"></div>
                @endforeach
            </div>

            <h6 class="text-dark mt-3">Applicant (if employed for less than two years on previous job)</h6>
            <div class="row g-3 mb-3">
                @foreach(['Name of Employer', 'Address of Employer', 'Telephone', 'Position Held', 'Year on Job', 'Supervisor’s Name'] as $field)
                    <div class="col-md-4"><input type="text" class="form-control" placeholder="{{ $field }}"></div>
                @endforeach
            </div>

            <!-- Annual Income -->
            <h4 class="fw-bold mb-4 text-danger">Annual Income</h4>
            @foreach(['Base Pay', 'Overtime', 'Commissions', 'Tips', 'Other'] as $incomeType)
                <label class="form-label">{{ $incomeType }}</label>
                <div class="row g-3 mb-3">
                    @foreach(['Applicant', 'Co-Applicant', 'Other'] as $role)
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="{{ $role }}">
                        </div>
                    @endforeach
                </div>
            @endforeach

           <!-- Current Liabilities -->
            <h4 class="fw-bold mb-4 text-danger">Current Liabilities</h4>
            @for ($i = 0; $i < 5; $i++)
                <label class="form-label">Creditor {{ $i + 1 }}</label>
                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Creditor">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Account #">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Amount Owed">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="# of Payments Left">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Monthly Amount">
                    </div>

                    @if ($i === 4)
                    <!-- Only add License Plate fields for the 5th liability -->
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="License Plate #1">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="License Plate #2">
                    </div>
                    @endif
                </div>
            @endfor


            <!-- Personal References -->
            <h4 class="fw-bold mb-4 text-danger">Personal References</h4>
            @for ($i = 0; $i < 2; $i++)
                <div class="row g-3 mb-3">
                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Name"></div>
                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Address"></div>
                    <div class="col-md-3"><input type="text" class="form-control" placeholder="City"></div>
                    <div class="col-md-3"><input type="text" class="form-control" placeholder="Telephone"></div>
                </div>
            @endfor


            <!-- Bank References -->
            <h4 class="fw-bold mb-4 text-danger">Bank References</h4>
            @for ($i = 0; $i < 2; $i++)
                <div class="row g-3 mb-3">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Address">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Telephone">
                    </div>
                </div>
            @endfor

            <!-- Felony Question -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Has anyone who will reside in the apartment ever been convicted of a felony?</label>
                <select class="form-select">
                    <option selected>– Select –</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>

            <!-- Explanation if Yes -->
            <div class="mb-4">
                <label class="form-label fw-semibold">If yes explain below</label>
                <input type="text" class="form-control" placeholder="Explain Here">
            </div>

            <!-- Consent + Signature -->
            <h4 class="fw-bold mb-4 text-danger">Authorization & Signature</h4>

            <hr class="mb-4">

            <p class="text-dark mb-3">
                The sum of <strong>$45 per applicant</strong> is hereby paid to cover the cost and expense of obtaining a credit report, screening and verifying references on the applicant(s); <strong>the sum is not refundable</strong>.
                Applicant(s) understand that the filing of this application does not bind the Lessor to reserve or assign an apartment or property.
            </p>

            <p class="text-dark mb-4">
                The undersigned applicant(s) has examined the statements made in this application and hereby certify that they are true, correct and complete and that all household income has been listed above.
                The statements are made to induce the Lessor to enter into a lease with Applicant(s) for the apartment listed above.
                <strong>I/We agree that inquiries may be made to verify the statements made in this application.</strong>
            </p>

            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" id="termsAgreement">
                <label class="form-check-label" for="termsAgreement">
                    I have read and agree to the Terms and Conditions and Privacy Policy.
                </label>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label">Signature of Applicant</label>
                    <input type="text" class="form-control" placeholder="Signature of Applicant">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <label class="form-label">Signature of Co-Applicant</label>
                    <input type="text" class="form-control" placeholder="Signature of Co-Applicant">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>


            <!-- Required Docs -->
            <h4 class="fw-bold mb-4 text-danger">Documents Needed</h4>
            <ul class="text-dark mb-4">
                <li>1. Copy of Driver’s License</li>
                <li>2. Copy of Social Security Card</li>
                <li>3. Latest 2 Pay Stubs / Proof of Income</li>
                <li>4. Latest Utility Bill</li>
            </ul>


          <!-- Submit -->
            <div class="text-end">
                <button class="btn px-5 py-2 no-hover" type="submit">
                    Submit Application
                </button>
            </div>
        </form>
    </div>
</section>

@include('includes.Home.index.log')
@include('includes.Home.index.cart')
@include('includes.Home.index.search')
@include('includes.footer')

@endsection
