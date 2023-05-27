@extends('dashboard.layout.main')

@section('container')
    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Add Patient
                            <span style="float:right">
                                <a href="/patient" class="btn btn-danger rounded-pill">Cancel</a>
                            </span>
                        </h5>

                        <!-- Vertical Form -->
                        <form action="/patient" method="POST" class="row g-3 needs-validation" novalidate>
                            @method('POST')
                            @csrf
                            <div class="col-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required
                                    value="{{ old('name') }}">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" name="age" class="form-control" id="age" required
                                    value="{{ old('age') }}">
                                <div class="invalid-feedback">
                                    @error('age')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option>Choose Gender</option>
                                    <option value="l" {{ old('gender') == 'l' ? 'selected' : '' }}>Laki-Laki</option>
                                    <option value="p" {{ old('gender') == 'p' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    @error('gender')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" id="address" required
                                    value="{{ old('address') }}">
                                <div class="invalid-feedback">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" required
                                    value="{{ old('phone') }}">
                                <div class="invalid-feedback">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
