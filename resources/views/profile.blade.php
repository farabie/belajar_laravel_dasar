<x-app-layout :title="$username ?? 'Profile'">
    <h1>{{$username ?? "Profile"}}</h1>
    <h3>{{$role_id ?? "Role Id Not Found"}}</h3>
</x-app-layout>
