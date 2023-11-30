<x-app-layout>
    <x-slot:title>
        Questionnaire
    </x-slot:title>
    <div>
        <!-- Question Display -->
        <h2 class="p-4 font-bold text-xl">{{ $question->question }}</h2>

        @if($question->question_type == '1')
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
        <div class="absolute bottom-16 space-x-6 text-xl font-bold">
            <button class="hover:bg-gray-200 p-2 rounded-full">Previous</button>
            <span>{{ $question->id }}/62</span>
            <button type="button" onclick="submitForm()">Next</button>
        </div>

        <!-- Progress bar -->
        <div class="h-6 bg-gray-200 fixed bottom-5 w-4/5">
            @php
                // Calculate the progress percentage
                $progressPercentage = ($question->id / 62) * 100;
            @endphp
            <div class="h-6 bg-Apple" style="width: {{ $progressPercentage }}%"></div>
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

