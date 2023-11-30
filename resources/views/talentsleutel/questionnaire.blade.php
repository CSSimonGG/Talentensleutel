<x-app-layout>
    <x-slot:title>
        Questionnaire
    </x-slot:title>
    <div>
        <!-- Question Display -->
        <h2 class="p-4 font-bold text-xl">{{ $question->question }}</h2>

        @if($question->id == '1' or $question->id == '8' or $question->id == '16' or $question->id == '18' or $question->id == '20' or $question->id == '24' or $question->id == '31' or $question->id == '36' or $question->id == '41' or $question->id == '47' or $question->id == '51' or $question->id == '57')
            @if($question->id == '1') <!-- Start subject Algemene Gegevens -->

            @elseif($question->id == '8') <!-- Start subject Bedrijfsinformatie -->

            @elseif($question->id == '16') <!-- Start subject Missie -->

            @elseif($question->id == '18') <!-- Start subject Heldere Focus -->
            <div> <!-- Subject Information Focus -->
                <div class="text-3xl object-center">
                    <h1>
                        <img src="/images/subjects/Focus.png" alt="" class="object-center h-96 ">
                        HELDERE FOCUS
                    </h1>
                </div>
                <br>
                <p class="1 xl">
                    Voordat je begint met het verbeteren van je leercultuur, is het belangrijk om je af te vragen wat je precies wilt bereiken.
                    Denk hierbij aan doelen zoals het vergroten van de inzetbaarheid van je medewerkers, het verbeteren van hun prestaties, of het ontwikkelen van hun vaardigheden en talenten.
                    Ook het optimaliseren van interne processen en het beter afstemmen van taken en inspanningen op de organisatiedoelstellingen kunnen doelstellingen zijn.
                </p>
            </div>
            @elseif($question->id == '20') <!-- Start subject Mix aan Leermogelijkheden -->
            <div> <!-- Subject Information Focus -->
                <div class="text-3xl object-center">
                    <h1>
                        <img src="/images/subjects/" alt="" class="object-center h-96 ">
                        Subject
                    </h1>
                </div>
                <br>
                <p class="1 xl">
                    Subject description
                </p>
            </div>
            @elseif($question->id == '24') <!-- Start subject Meerjarig Beleid -->

            @elseif($question->id == '31') <!-- Start subject Inspirerend Leiderschap -->

            @elseif($question->id == '36') <!-- Start subject Medewerker Centraal -->

            @elseif($question->id == '41') <!-- Start subject Leervoorzieningen -->

            @elseif($question->id == '47') <!-- Start subject Gezonde & Energieke Werkomgeving -->

            @elseif($question->id == '51') <!-- Start subject Meetbare Leereffecten -->

            @elseif($question->id == '57') <!-- Start subject Kennis -->

            @endif
        @elseif($question->question_type == '1')
            <div> <!-- Question Type 0 (4 options) -->
                <form id="questionForm" action="/questionnaire" method="POST">
                    @csrf
                    <input type="hidden" name="question_id" value="{{ $question->id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}"> <!-- Assuming you are using Laravel's authentication -->

                    <label>
                        <input type="radio" name="answer_id" value="2"> Onduidelijk
                    </label>

                    <label>
                        <input type="radio" name="answer_id" value="5"> Ja, zeker wel
                    </label>

                    <label>
                        <input type="radio" name="answer_id" value="6"> Ja, enigszins
                    </label>

                    <label>
                        <input type="radio" name="answer_id" value="7"> Nee, niet of nauwelijks
                    </label>
                </form>
            </div>
        @elseif($question->question_type == '0')
            <div> <!-- Question Type 1 (2 options) -->

            </div>
        @elseif($question->question_type == '2')
            <div> <!-- Question Type 2 (open question) -->

            </div>
        @elseif($question->id == '7') <!-- Question Type 3 -->
            <div> <!-- Question Type 3 (multiple choice/dropdown (question 7))  -->

            </div>
        @elseif($question->id == '62') <!-- Question Type 4 -->
            <div> <!-- Question Type 4 (privacy (question 62))  -->

            </div>
        @elseif($question->id > '62') <!-- End of questionnaire -->
            <div> <!-- Questionnaire done  -->

            </div>
        @endif

        <!-- Navigation Buttons -->
        <button >Previous</button>
        <button type="button" onclick="submitForm()">Next</button>

        <!-- Progress bar -->
        <div class="w-full h-6 bg-gray-200 fixed bottom-5">
            <div class="h-6 bg-Apple" style="width: 2%"></div>
        </div>

        <script>
            let selectedAnswer = null;

            function submitForm() {
                if (selectedAnswer !== null) {
                    document.querySelector('input[name="answer_id"]').value = selectedAnswer;

                    // Perform an Ajax request to submit the form data
                    const formData = new FormData(document.getElementById('questionForm'));
                    fetch('/questionnaire', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                    })
                        .then(response => response.json())
                        .then(data => {
                            // Update content based on the response
                            console.log(data);
                            // You can update the content or redirect as needed
                        })
                        .catch(error => console.error('Error:', error));
                } else {
                    // Handle the case where no answer is selected
                    alert('Please select an answer before clicking Next.');
                }
            }

            document.querySelectorAll('input[name="answer_id"]').forEach(function(input) {
                input.addEventListener('change', function() {
                    selectedAnswer = this.value;
                });
            });
        </script>
    </div>
</x-app-layout>

