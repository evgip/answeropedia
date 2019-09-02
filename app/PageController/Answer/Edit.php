<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Edit_Answer_PageController extends Abstract_PageController
{
    protected $question;
    protected $answer;

    public function handle(Request $request, Response $response, $args): Response
    {
        parent::handleRequest($request, $response, $args);

        $answerID = $args['id'];

        try {
            $this->question = (new Question_Query($this->lang))->questionWithID($answerID);
        } catch (Throwable $e) {
            return (new InternalServerError_Error_PageController($this->container))->handle($this->lang, $request, $response, $args);
        }

        $this->answer = (new Answers_Query($this->lang))->answerWithID($this->question->id);

        if ($this->answer == null) {
            $answer = new Answer_Model();
            $answer->id = $this->question->id;
            $answer->text = null;

            $this->answer = (new Answer_Mapper($this->lang))->create($answer);
        }

        $this->question_how_to_edit = $this->_get_how_to_edit_question();

        $this->template = 'answer_edit';
        $this->showFooter = false;
        $this->pageTitle = $this->question->title . ' – ' . $this->translator->get('answer', 'edit_answer') . ' – ' . $this->translator->get('answeropedia');
        $this->pageDescription = $this->translator->get('answer', 'edit_answer');

        $this->includeJS[] = 'answer/update.js?v=1';
        $this->includeCSS[] = 'https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css';

        $output = $this->renderPage();
        $response->getBody()->write($output);

        return $response;
    }

    private function _get_how_to_edit_question()
    {
        try {
            $how_to_edit_question_ID = $this->translator->get('service_id', 'how_to_edit');
            $how_to_edit_question = (new Question_Query($this->lang))->questionWithID($how_to_edit_question_ID);
        } catch (Throwable $e) {
            $how_to_edit_question = null;
        }

        return $how_to_edit_question;
    }
}
