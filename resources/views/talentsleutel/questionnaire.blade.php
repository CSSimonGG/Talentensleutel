<x-app-layout>
    <x-slot:title>
        Questionnaire
    </x-slot:title>
    <div id="questionContainer">
        <!-- Question Display -->
        <h2 class="p-4 font-bold text-xl">{{ $question->question }}</h2>

        <form id="questionForm" action="/questionnaire" method="POST">
            @csrf
            <input type="hidden" name="question_id" value="{{ $question->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            @if($question->question_type == '0')
                <!-- Question Type 1 (2 options) -->
                <label>
                    <input type="radio" name="answer_id" value="3"> Ja
                </label>

                <label>
                    <input type="radio" name="answer_id" value="4"> Nee
                </label>
            @elseif($question->question_type == '1')
                <!-- Question Type 1 (4 options) -->
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
            @elseif($question->question_type == '2')
                <!-- Question Type 2 (open question) -->
                <input type="text" id="textInput" name="answer_id">
            @elseif($question->question_type == '3') <!-- Question Type 4 -->
                <label>
                    <input type="radio" name="answer_id" value="8"> Ik heb de privacyverklaring gelezen en ga hiermee akkoord
                </label>

                <label>
                    <input type="radio" name="answer_id" value="9"> Ik ga niet akkoord met de privacyverklaring (wij zullen uw persoonsgegevens verwijderen)
                </label>
            @elseif($question->id > '62') <!-- End of questionnaire -->
                <div> <!-- Questionnaire done  -->

                </div>
            @endif
        </form>

        <!-- Navigation Buttons -->
        <div class="absolute bottom-16 space-x-6 text-xl font-bold">
            <button onclick="loadPreviousQuestion()" class="hover:bg-gray-200 p-2 rounded-full">Previous</button>
            <span>{{ $question->id }}/62</span>
            <button onclick="submitFormAndLoadNextQuestion()" class="hover:bg-gray-200 p-2 rounded-full">Next</button>
        </div>

        <!-- Progress bar -->
        <div class="h-6 bg-gray-200 fixed bottom-5 w-4/5">
            @php
                // Calculate the progress percentage
                $progressPercentage = ($question->id / 62) * 100;
            @endphp
            <div class="h-6 bg-Apple" style="width: {{ $progressPercentage }}%"></div>
        </div>
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
                        selectedAnswer = null;
                    })
                    .catch(error => console.error('Error:', error));
            } else {
                // Handle the case where no answer is selected
                alert('Please select an answer before clicking Next.');
            }
        }

        // Function to attach event listeners
        function attachEventListeners() {
            document.querySelectorAll('input[name="answer_id"]').forEach(function (input) {
                input.addEventListener('change', handleAnswerChange);
            });
        }

        // Function to handle answer change
        function handleAnswerChange() {
            selectedAnswer = this.value;
        }

        let currentQuestionId = {{ $question->id }};

        function loadPreviousQuestion() {
            if (currentQuestionId > 1) {
                currentQuestionId--;
                loadQuestionById(currentQuestionId);
            }
        }

        function submitFormAndLoadNextQuestion() {
            submitForm(); // Your existing function to submit the form
            currentQuestionId++;
            loadQuestionById(currentQuestionId);
        }

        function loadQuestionById(questionId) {
            // Use AJAX to dynamically load the question by ID
            fetch(`/load-question/${questionId}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('questionContainer').innerHTML = data;
                    attachEventListeners();
                })
                .catch(error => console.error('Error loading question:', error));
        }

        attachEventListeners();
    </script>
</x-app-layout>

