<div class="container mt-5">
    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" readonly value="{{ $order->name ?? '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="number">Number</label>
                <input type="text" class="form-control" id="number" name="number" readonly value="{{ $order->number ?? '' }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="emai" name="emai" readonly value="{{ $order->emai ?? '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" readonly value="{{ $order->city ?? '' }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="session_type">Session Type</label>
                <input type="text" class="form-control" id="session_type" name="session_type" readonly value="{{ $order->session_type ?? '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="user_id">User ID</label>
                <input type="text" class="form-control" id="user_id" name="user_id" readonly value="{{ $order->user_id ?? '' }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="courses_id">Courses</label>
                <input type="text" class="form-control" id="courses_id" name="courses_id" readonly value="{{ $order->course?->name ?? '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" readonly value="{{ $order->price ?? '' }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="duration">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" readonly value="{{ $order->duration ?? '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="coupon_code">Coupon Code</label>
                <input type="text" class="form-control" id="coupon_code" name="coupon_code" readonly value="{{ $order->coupon_code ?? '' }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="transection_id">Transaction ID</label>
                <input type="text" class="form-control" id="transection_id" name="transection_id" readonly value="{{ $order->transection_id ?? '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="transection_date">Transaction Date</label>
                <input type="text" class="form-control" id="transection_date" name="transection_date" readonly value="{{ $order->transection_date ?? '' }}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="payment_type">Payment Type</label>
                <input type="text" class="form-control" id="payment_type" name="payment_type" readonly value="{{ $order->payment_type ?? '' }}">
            </div>
            <div class="form-group col-md-6">
                <label for="payment_status">Payment Status</label>
                <input type="text" class="form-control" id="payment_status" name="payment_status" readonly value="{{ $order->payment_status ?? '' }}">
            </div>
        </div>

 <div class="form-row">
    <div class="form-group col-md-6">
        <label for="order_date">Start Date</label>
        <input type="text" class="form-control" id="order_date" name="order_date" readonly value="{{ optional($order->created_at)->format('d M y') }}">
    </div>
    <div class="form-group col-md-6">
        <label for="deleted_at">End Date</label>
        @if ($order->created_at && $order->duration)
            @php
                $endDate = Carbon\Carbon::parse($order->created_at)->addMonths($order->duration);
            @endphp
            <input type="text" class="form-control" id="deleted_at" name="enddate" readonly value="{{ $endDate->format('d M y') }}">
        @else
            <input type="text" class="form-control" id="deleted_at" name="enddate" readonly value="">
        @endif
    </div>
</div>



        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="created_at">Created At</label>
                <input type="text" class="form-control" id="created_at" name="created_at" readonly value="{{ $order->created_at ?? '' }}">
            </div>
            <!-- Add more fields based on your requirements -->
        </div>

        <!--<button type="submit" class="btn btn-primary">Submit</button>-->
    </form>
</div>
