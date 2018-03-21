<?php

namespace App\Admin\Controllers;

use App\Models\PortalAlunoProf;

use App\Models\User;
use App\Models\Faculdade;
use App\Models\FaculdadeCurso;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PortalAlunoProfController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(PortalAlunoProf::class, function (Grid $grid) {

            $grid->id('ID')->sortable();

            $grid->title('Titulo');
            $grid->faculdades()->pluck('name')->label();
            $grid->cursos()->pluck('name')->label();
            $grid->periodo('Período')->label('default');
            $grid->data_aula('Data Aula');

            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(PortalAlunoProf::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title');
            $form->select('author_id')->options(function ($id) {
                $user = User::find($id);

                if ($user) {
                    return [$user->id => $user->name];
                }
            })->ajax('/admin/api/users');

            $form->editor('content');

            $form->number('rate');
            $form->switch('released');

            $form->image('picture');
            $form->file('download');
            $form->text('link');

            $form->multipleSelect('faculdades')->options(Faculdade::all()->pluck('name', 'id'));
            $form->multipleSelect('cursos')->options(FaculdadeCurso::all()->pluck('name', 'id'));

            $form->number('periodo');

            $form->date('data_aula');

            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
