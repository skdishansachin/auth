<section class="px-4 py-14 mx-auto max-w-screen-lg">
    <div class="mb-10">
        <h2 class="mb-2 text-2xl font-bold text-left">Authentication Setup</h2>
        <p class="text-sm text-left text-gray-600">Welcome to your authentication setup. Below you will find sections to help you configure and customize the auth in your application.</p>
    </div>
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
        <x-auth::setup.welcome-card icon="appearance" title="Change The Appearance" description="Change the appearance of your auth screens, add a logo, modify the color, and more."></x-auth::setup.welcome-card>
        <x-auth::setup.welcome-card icon="social-providers" title="Add/Edit Social Providers" description="Select the social networks that users can use for authentication."></x-auth::setup.welcome-card>
        <x-auth::setup.welcome-card icon="language" title="Update Language Copy" description="Update the text copy on your login, registration, and other authentication pages"></x-auth::setup.welcome-card>
        <x-auth::setup.welcome-card icon="settings" title="Modify Settings" description="Adjust specific authentication features and enable/disable functionality."></x-auth::setup.welcome-card>
    </div>
    <div class="relative px-5 py-4 mt-10 w-full text-gray-900 bg-gray-100 rounded-md border border-gray-200 dark:bg-zinc-700 dark:text-gray-300 dark:border-gray-700">
        <div class="text-sm opacity-80">To learn more about this authentication package, be sure to <a href="https://auth.devdojo.com/docs" target="_blank" class="underline">visit the documentation</a> or <a href="https://github.com/thedevdojo/auth" target="_blank" class="underline">view the project on Github</a>.</div>
    </div>
</section>
