<!-- Create by joker banny -->
<div
    class="h-screen flex justify-center items-center
bg-[url('https://static.vecteezy.com/system/resources/previews/014/402/031/non_2x/people-in-the-restaurant-blurred-background-free-photo.jpg')]
    bg-cover py-10">
    <div class="lg:w-2/5 md:w-1/2 w-2/3">
        <form method="POST" action="{{ route('register') }}" class="bg-white p-10 rounded-lg shadow-lg min-w-full">
            @csrf
            <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">REGISTRARSE</h1>
            <div>
                <label for="name" :value="__('Name')" class="text-gray-800 font-semibold block my-3 text-md" for="username">Nombre</label>
                <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" placeholder="username" />
            </div>
            <div>
                <label for="email" :value="__('Email')"
                class="text-gray-800 font-semibold block my-3 text-md" for="email">Correo</label>
                <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" placeholder="email" />
            </div>
            <div>
                <label for="password" :value="__('Password')"
                class="text-gray-800 font-semibold block my-3 text-md" for="password">Contraseña</label>
                <input id="password"
                type="password"
                name="password"
                required autocomplete="new-password"
                class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" placeholder="password" />
            </div>
            <div>
                <label  for="password_confirmation" :value="__('Confirm Password')"
                class="text-gray-800 font-semibold block my-3 text-md">Confirmar contraseña</label>
                <input id="password_confirmation"
                type="password"
                name="password_confirmation" required autocomplete="new-password"
                class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" placeholder="confirm password" />
            </div>
            <button type="submit"
                class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
            </form>
    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>