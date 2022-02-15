@include('custom.header')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Login Tab Content -->
                <div class="account-content">
                    <div class="row align-items-center justify-content-center">

                        @if (session()->has('message'))
                            <div class="alert alert-info" role="alert">
                                <strong>Your Request Sent Successfully!</strong>      {{ session()->get('message') }}
                            </div>
                        @endif

                        <div class="col-md-12 col-lg-8">
                            <div class="login-header">
                                <h3>Submit Contact Information To Supervisor</h3>

                            </div>

                            <form action="{{ route('booking.confirmation') }}" method="post">
                                @csrf
                                <div class="form-group form-focus">
                                    <input type="hidden" name="teacher_id" value="{{ $id }}">
                                    <input type="text" name="topicsFor_booking" class="form-control floating">
                                    <label class="focus-label">Your Research Topics</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student1_name" class="form-control floating">
                                    <label class="focus-label">Student 1 Name</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student1_email" class="form-control floating">
                                    <label class="focus-label">Student 1 Email</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student1_phone" class="form-control floating">
                                    <label class="focus-label">Student 1 Phone</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student1_batch" class="form-control floating">
                                    <label class="focus-label">Student 1 Batch</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student2_name" class="form-control floating">
                                    <label class="focus-label">Student 2 Name</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student2_email" class="form-control floating">
                                    <label class="focus-label">Student 2 Email</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student2_phone" class="form-control floating">
                                    <label class="focus-label">Student 2 Phone</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student2_batch" class="form-control floating">
                                    <label class="focus-label">Student 2 Batch</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student3_name" class="form-control floating">
                                    <label class="focus-label">Student 3 Name</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student3_email" class="form-control floating">
                                    <label class="focus-label">Student 3 Email</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student3_phone" class="form-control floating">
                                    <label class="focus-label">Student 3 Phone</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="student3_batch" class="form-control floating">
                                    <label class="focus-label">Student 3 Batch</label>
                                </div>
                                <div class="form-group form-focus">
                                    <input type="text" name="group_name" class="form-control floating">
                                    <label class="focus-label">Group Name</label>
                                </div>

                                <div class="form-group form-focus">
                                    <input type="datetime-local" name="booking_dateTime"  class="form-control floating">
                                    <label class="focus-label">Booking Time</label>
                                </div>

                                <br> <hr>
                                <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Submit</button>
                            </form>
                            <hr> <br>
                        </div>
                    </div>
                </div>
                <!-- /Login Tab Content -->
            </div>
        </div>
    </div>
</div>

@include('custom.footer')
