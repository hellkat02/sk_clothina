<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SK Clothina</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}">

    {{-- CSS Links --}}
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="video_background">
        <video src="{{ asset('videos/live_wallpaper.mp4') }}" autoplay loop muted></video>
    </div>
    <header>

    </header>
    <main>
        <div class="container h-100">
            <div class="d-flex justify-content-center">
                <div class="card v_align rounded-lg">
                    <div class="form-group">
                        <h1 class="h1_custom_font_1">Welcome to SK Clothina</h1>
                        <form class="form_config">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="user_email" class="form-control" placeholder="Enter email" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="user_pwd" class="form-control" placeholder="Enter password" />
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked />
                                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Fancy a new account? <a href="#!">Register Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>

    {{-- Js Links --}}
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
