<x-app-layout>
    <x-slot:title>
        Contact
    </x-slot:title>

    <div class="container mx-auto p-8">
        <div class="text-3xl text-center mb-8 font-bold">
            Contactformulier
        </div>

        <form action="/submit-contact-form" method="post">
            <!-- Company Information -->
            <label for="company-name">Bedrijfsnaam:</label>
            <input type="text" id="company-name" name="company_name" required class="mb-4 p-2 w-full">

            <!-- Contact Person Information -->
            <label for="full-name">Naam en achternaam:</label>
            <input type="text" id="full-name" name="full_name" required class="mb-4 p-2 w-full">

            <!-- Sector Information -->
            <label for="sector">Sector:</label>
            <input type="text" id="sector" name="sector" required class="mb-4 p-2 w-full">

            <!-- Email Address -->
            <label for="email">E-mailadres:</label>
            <input type="email" id="email" name="email" required class="mb-4 p-2 w-full">

            <!-- Phone Number -->
            <label for="phone">Telefoonnummer:</label>
            <input type="tel" id="phone" name="phone" required class="mb-4 p-2 w-full">

            <!-- Question/Comment -->
            <label for="question-comment">Vraag/opmerking:</label>
            <textarea id="question-comment" name="question_comment" required rows="4" class="mb-4 p-2 w-full"></textarea>

            <!-- Privacy Statement -->
            <label for="privacy-agreement" class="flex items-center">
                <input type="checkbox" id="privacy-agreement" name="privacy_agreement" required class="mr-2">
                Ik heb de privacyverklaring gelezen en ga hiermee akkoord
            </label>

            <!-- Submit Button -->
            <button type="submit" class="bg-Forestgreen text-white p-2 rounded">Verstuur</button>
        </form>
    </div>
</x-app-layout>
