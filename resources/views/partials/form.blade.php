<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name ?? '')" required autofocus autocomplete="name" />
    <x-input-error class="mt-2" :messages="$errors->get('name')" />
</div>

<div class="py-3">
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email ?? '')" required autocomplete="email" />
    <x-input-error class="mt-2" :messages="$errors->get('email')" />
</div>

@if (!request()->routeIs('user.edit'))
<div class="py-3">
    <x-input-label for="password" :value="__('Password')" />
    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" :value="old('password', $user->password ?? '')" required />
    <x-input-error class="mt-2" :messages="$errors->get('password')" />
</div>
@endif


<div class="flex items-center gap-4">
    <x-primary-button>{{ __('Save') }}</x-primary-button>
</div>