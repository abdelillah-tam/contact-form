<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/style.css', 'resources/css/app.css'])
    <title>Contact Us</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

</head>

<body>
    <section class="h-full flex flex-col w-1/2 m-auto items-center ">
        <div class="w-full flex flex-col items-center justify-center basis-2/6">
            <p class="rounded-full px-3 bg-purple-100 text-purple-600 mb-4">Contact Us</p>
            <h1 class="text-4xl font-bold text-gray-900 ">Let's Get In Touch</h1>

        </div>
        <form action="" method="post" class="w-full flex flex-col justify-around basis-4/6 pb-14">
            @csrf
            <div class="flex flex-col">
                <label for="name">Full Name</label>
                <input id="name" name="name" class="rounded-full border-custom" type="text"
                    placeholder="Enter your full name...">
                <p class="text-red-600 empty-name hidden text-sm">Cannot accept empty name</p>
            </div>
            <div class="flex flex-col">
                <label for="email">Email</label>
                <input class="rounded-full border-custom" type="email" placeholder="Enter your email address" id="email"
                    name="email">
                <p class="text-red-600 empty-email hidden text-sm">Cannot accept empty email</p>
            </div>
            <div class="flex flex-col basis-[30%]">
                <label for="message">Message</label>
                <textarea class="h-full resize-none border-custom" type="text" placeholder="Enter your main text here"
                    id="message" name="message"></textarea>
                <p class="text-red-600 empty-message hidden text-sm">Cannot accept empty message</p>
            </div>
            <button class="bg-purple-500 rounded-full py-2 text-white cursor-pointer" id="sbmt" type="submit">Submit
                Form</button>
        </form>
        <section class="close-section w-full flex">

            @isset($status)
                <p class="done-p bg-green-500 w-full text-xl text-white p-2 text-center">{{session('status')}}!
                    <button type="button" class="close-btn underline cursor-pointer">close</button>
                </p>
            @endisset
        </section>
        <p>asset url: {{ $asset }}</p>
    </section>


</body>
<script type="text/javascript">

</script>

</html>