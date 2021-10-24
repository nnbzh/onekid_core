<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\Pagination;
use App\Http\Controllers\BaseController;
use App\Models\ClassCategory;
use Illuminate\Http\JsonResponse;

class CategoriesController extends BaseController
{
    public function list(): JsonResponse
    {
        return $this->successResponse(Pagination::handle(ClassCategory::query()
            ->withCount('classTemplates')
            ->paginate(10)
        ));
    }

    public function get($id) {
        $category = ClassCategory::query()->findOrFail($id);
        $classTemplates = $category->classTemplates()->with('centre');

        if (! empty($keyword = request()->get('keyword'))) {
            $classTemplates->where('name', 'ilike', "$keyword%");
        }

        $category->setRelation('class_templates', Pagination::handle($classTemplates->paginate(10)));

        return $this->successResponse($category);
    }
}