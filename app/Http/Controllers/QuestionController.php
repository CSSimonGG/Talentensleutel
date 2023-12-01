<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reasoning;
use App\Models\Result;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question = Question::where('id', 62)->first();
        return view('talentsleutel/questionnaire')
            ->with('question', $question);
    }

    public function loadQuestionById($questionId)
    {
        $question = Question::findOrFail($questionId);
        return view('talentsleutel.question_partial', compact('question'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $userId = $request->user_id;
            $questionId = $request->question_id;
            $answerId = $request->answer_id;

            // Retrieve the associated Question
            $question = Question::findOrFail($questionId);
            $questionType = $question->question_type;

            // Check the question type
            if ($questionType == 2) {
                // Query the reasoning table
                $reasoning = Reasoning::where('question_id', $questionId)
                    ->where('answer_id', 1)
                    ->first();

                if (!$reasoning) {
                    // Handle the case where reasoning doesn't exist
                    return response()->json(['error' => 'Reasoning not found'], 404);
                }
                $reasoningId = $reasoning->id;

                // Check if a result with the same user_id and reasoning_id exists
                $existingResult = Result::where('user_id', $userId)
                    ->where('question_id', $questionId)
                    ->first();

                if ($existingResult) {
                    // If the result already exists, update the reasoning_id
                    $existingResult->update(['open_question_answer' => $answerId]);
                } else {
                    // If the result doesn't exist, create a new one
                    Result::create([
                        'user_id' => $userId,
                        'question_id' => $questionId,
                        'reasoning_id' => $reasoningId,
                        'open_question_answer' => $answerId,
                    ]);
                }
            }
            else
            {
                // Query the reasoning table
                $reasoning = Reasoning::where('question_id', $questionId)
                    ->where('answer_id', $answerId)
                    ->first();

                if (!$reasoning) {
                    // Handle the case where reasoning doesn't exist
                    return response()->json(['error' => 'Reasoning not found'], 404);
                }
                $reasoningId = $reasoning->id;

                // Check if a result with the same user_id and reasoning_id exists
                $existingResult = Result::where('user_id', $userId)
                    ->where('question_id', $questionId)
                    ->first();

                if ($existingResult) {
                    // If the result already exists, update the reasoning_id
                    $existingResult->update(['reasoning_id' => $reasoningId]);
                } else {
                    // If the result doesn't exist, create a new one
                    Result::create([
                        'user_id' => $userId,
                        'question_id' => $questionId,
                        'reasoning_id' => $reasoningId,
                        'open_question_answer' => '',
                    ]);
                }
            }

            // You can return a response or redirect to the next question
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            Log::error('Error processing form submission: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
