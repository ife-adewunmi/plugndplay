<!--Group Modal-->
<form action="" method="post" class="check-names" enctype="multipart/form-data">
    @csrf
    @method('put')
    <input type="hidden" name="update_name" value="0">
    <input type="hidden" name="update_description" value="0">
    <input type="hidden" name="is_category" value="0">
    <!-- Modal -->
    <div class="modal fade" id="groupModal" tabindex="-1" aria-labelledby="groupModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('FsLang::panel.group') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.group_category') }}</label>
                        <div class="col-sm-9 col-md-10">
                            <select class="form-select" name="parent_id" required>
                                <option selected disabled value="">{{ __('FsLang::panel.select_box_tip_group_category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.table_order') }}</label>
                        <div class="col-sm-9 col-md-10">
                            <input type="number" class="form-control input-number" name="rating" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.table_name') }}</label>
                        <div class="col-sm-9 col-md-10">
                            <button type="button" class="btn btn-outline-secondary btn-modal w-100 text-start name-button" data-bs-toggle="modal" data-parent="#groupModal" data-bs-target="#langGroupModal">{{ __('FsLang::panel.table_name') }}</button>
                            <div class="invalid-feedback">{{ __('FsLang::tips.required_group_name') }}</div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.table_description') }}</label>
                        <div class="col-sm-9 col-md-10">
                            <button type="button" class="btn btn-outline-secondary btn-modal w-100 text-start desc-button" data-bs-toggle="modal" data-parent="#groupModal" data-bs-target="#langGroupDescModal">{{ __('FsLang::panel.table_description') }}</button>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.table_icon') }}</label>
                        <div class="col-sm-9 col-md-10">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary dropdown-toggle showSelectTypeName" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="showIcon">{{ __('FsLang::panel.button_image_upload') }}</button>
                                <ul class="dropdown-menu selectInputType">
                                    <li data-name="inputFile"><a class="dropdown-item" href="#">{{ __('FsLang::panel.button_image_upload') }}</a></li>
                                    <li data-name="inputUrl"><a class="dropdown-item" href="#">{{ __('FsLang::panel.button_image_input') }}</a></li>
                                </ul>
                                <input type="file" class="form-control inputFile" name="cover_file">
                                <input type="text" class="form-control inputUrl" name="cover_file_url" style="display:none;">
                                <a class="btn btn-outline-secondary" href="#" target="_blank" role="button" id="cover_file_view" style="display:none;">{{ __('FsLang::panel.button_view') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.table_banner') }}</label>
                        <div class="col-sm-9 col-md-10">
                            <div class="input-group">
                                <button class="btn btn-outline-secondary dropdown-toggle showSelectTypeName" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="showIcon">{{ __('FsLang::panel.button_image_upload') }}</button>
                                <ul class="dropdown-menu selectInputType">
                                    <li data-name="inputFile"><a class="dropdown-item" href="#">{{ __('FsLang::panel.button_image_upload') }}</a></li>
                                    <li data-name="inputUrl"><a class="dropdown-item" href="#">{{ __('FsLang::panel.button_image_input') }}</a></li>
                                </ul>
                                <input type="file" class="form-control inputFile" name="banner_file">
                                <input type="text" class="form-control inputUrl" name="banner_file_url" style="display:none;">
                                <a class="btn btn-outline-secondary" href="#" target="_blank" role="button" id="banner_file_view" style="display:none;">{{ __('FsLang::panel.button_view') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.group_table_mode') }}</label>
                        <div class="col-sm-9 col-md-10 pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type_mode" id="type_mode_true" value="1" data-bs-toggle="collapse" data-bs-target=".mode_setting.show" aria-expanded="false" aria-controls="mode_setting" checked>
                                <label class="form-check-label" for="type_mode_true">{{ __('FsLang::panel.group_option_mode_public') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type_mode" id="type_mode_false" value="2" data-bs-toggle="collapse" data-bs-target=".mode_setting:not(.show)" aria-expanded="false" aria-controls="mode_setting">
                                <label class="form-check-label" for="type_mode_false">{{ __('FsLang::panel.group_option_mode_private') }}</label>
                            </div>
                            <div class="collapse mode_setting mt-2">
                                <div class="input-group mb-2">
                                    <span class="input-group-text">{{ __('FsLang::panel.group_table_find') }}</span>
                                    <div class="form-control">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type_find" id="type_find_true" value="1" checked>
                                            <label class="form-check-label" for="type_find_true">{{ __('FsLang::panel.group_option_find_visible') }}</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="type_find" id="type_find_false" value="2">
                                            <label class="form-check-label" for="type_find_false">{{ __('FsLang::panel.group_option_find_hidden') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">{{ __('FsLang::panel.table_whitelist_rules') }}</span>
                                    <select class="form-select select2" name="permissions[mode_whitelist_roles][]" multiple="multiple">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->getLangName($defaultLanguage) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.group_table_follow') }}</label>
                        <div class="col-sm-9 col-md-10 pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type_follow" id="type_follow_true" value="1" data-bs-toggle="collapse" data-bs-target=".follow_setting.show" aria-expanded="false" aria-controls="follow_setting" checked>
                                <label class="form-check-label" for="type_follow_true">{{ __('FsLang::panel.group_option_follow_fresns') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type_follow" id="type_follow_false" value="2" data-bs-toggle="collapse" data-bs-target=".follow_setting:not(.show)" aria-expanded="false" aria-controls="follow_setting">
                                <label class="form-check-label" for="type_follow_false">{{ __('FsLang::panel.group_option_follow_plugin') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type_follow" id="type_follow_close" value="3" data-bs-toggle="collapse" data-bs-target=".follow_setting.show" aria-expanded="false" aria-controls="follow_setting">
                                <label class="form-check-label" for="type_follow_close">{{ __('FsLang::panel.option_close') }}</label>
                            </div>
                            <div class="collapse follow_setting mt-2">
                                <div class="input-group">
                                    <span class="input-group-text">{{ __('FsLang::panel.table_plugin') }}</span>
                                    <select class="form-select" name="plugin_fskey">
                                        <option selected disabled>{{ __('FsLang::panel.select_box_tip_plugin') }}</option>
                                        @foreach ($plugins as $plugin)
                                            <option value="{{ $plugin->fskey }}">{{ $plugin->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.group_table_recommend') }}</label>
                        <div class="col-sm-9 col-md-10 pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_recommend" id="recommend_false" value="0" checked>
                                <label class="form-check-label" for="recommend_false">{{ __('FsLang::panel.option_no') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_recommend" id="recommend_true" value="1">
                                <label class="form-check-label" for="recommend_true">{{ __('FsLang::panel.option_yes') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.group_table_admins') }}</label>
                        <div class="col-sm-9 col-md-10">
                            <select class="form-select group-user-select2" name="admin_ids[]" multiple="multiple"></select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.group_table_post_publish') }}</label>
                        <div class="col-sm-9 col-md-10 pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permissions[publish_post]" id="publish.post.1" value="1" data-bs-toggle="collapse" data-bs-target=".publish_post_setting.show" aria-expanded="false" aria-controls="publish_post_setting" checked>
                                <label class="form-check-label" for="publish.post.1">{{ __('FsLang::panel.group_option_publish_all') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permissions[publish_post]" id="publish.post.2" value="2" data-bs-toggle="collapse" data-bs-target=".publish_post_setting.show" aria-expanded="false" aria-controls="publish_post_setting">
                                <label class="form-check-label" for="publish.post.2">{{ __('FsLang::panel.group_option_publish_follow') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permissions[publish_post]" id="publish.post.3" value="3" data-bs-toggle="collapse" data-bs-target=".publish_post_setting:not(.show)" aria-expanded="false" aria-controls="publish_post_setting">
                                <label class="form-check-label" for="publish.post.3">{{ __('FsLang::panel.group_option_publish_role') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permissions[publish_post]" id="publish.post.4" value="4" data-bs-toggle="collapse" data-bs-target=".publish_post_setting.show" aria-expanded="false" aria-controls="publish_post_setting">
                                <label class="form-check-label" for="publish.post.4">{{ __('FsLang::panel.group_option_publish_admin') }}</label>
                            </div>
                            <div class="collapse publish_post_setting mt-2">
                                <div class="input-group">
                                    <span class="input-group-text">{{ __('FsLang::panel.group_table_publish_perm_role') }}</span>
                                    <select class="form-select select2" name="permissions[publish_post_roles][]" multiple="multiple">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->getLangName($defaultLanguage) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text">{{ __('FsLang::panel.group_table_publish_perm_review') }}<i class="bi bi-info-circle ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('FsLang::panel.group_table_publish_perm_review_desc') }}"></i></span>
                                <div class="form-control bg-white">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="permissions[publish_post_review]" id="publish.post.review.0" value="0" checked>
                                        <label class="form-check-label" for="publish.post.review.0">{{ __('FsLang::panel.option_no') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="permissions[publish_post_review]" id="publish.post.review.1" value="1">
                                        <label class="form-check-label" for="publish.post.review.1">{{ __('FsLang::panel.option_yes') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label">{{ __('FsLang::panel.group_table_comment_publish') }}</label>
                        <div class="col-sm-9 col-md-10 pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permissions[publish_comment]" id="publish.comment.1" value="1" data-bs-toggle="collapse" data-bs-target=".publish_comment_setting.show" aria-expanded="false" aria-controls="publish_comment_setting" checked>
                                <label class="form-check-label" for="publish.comment.1">{{ __('FsLang::panel.group_option_publish_all') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permissions[publish_comment]" id="publish.comment.2" value="2" data-bs-toggle="collapse" data-bs-target=".publish_comment_setting.show" aria-expanded="false" aria-controls="publish_comment_setting">
                                <label class="form-check-label" for="publish.comment.2">{{ __('FsLang::panel.group_option_publish_follow') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permissions[publish_comment]" id="publish.comment.3" value="3" data-bs-toggle="collapse" data-bs-target=".publish_comment_setting:not(.show)" aria-expanded="false" aria-controls="publish_comment_setting">
                                <label class="form-check-label" for="publish.comment.3">{{ __('FsLang::panel.group_option_publish_role') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="permissions[publish_comment]" id="publish.comment.4" value="4" data-bs-toggle="collapse" data-bs-target=".publish_comment_setting.show" aria-expanded="false" aria-controls="publish_comment_setting">
                                <label class="form-check-label" for="publish.comment.4">{{ __('FsLang::panel.group_option_publish_admin') }}</label>
                            </div>
                            <div class="collapse publish_comment_setting mt-2">
                                <div class="input-group">
                                    <span class="input-group-text">{{ __('FsLang::panel.group_table_publish_perm_role') }}</span>
                                    <select class="form-select select2" name="permissions[publish_comment_roles][]" multiple="multiple">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->getLangName($defaultLanguage) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text">{{ __('FsLang::panel.group_table_publish_perm_review') }}<i class="bi bi-info-circle ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('FsLang::panel.group_table_publish_perm_review_desc') }}"></i></span>
                                <div class="form-control bg-white">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="permissions[publish_comment_review]" id="publish.comment.review.0" value="0" checked>
                                        <label class="form-check-label" for="publish.comment.review.0">{{ __('FsLang::panel.option_no') }}</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="permissions[publish_comment_review]" id="publish.comment.review.1" value="1">
                                        <label class="form-check-label" for="publish.comment.review.1">{{ __('FsLang::panel.option_yes') }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-md-2 col-form-label"></label>
                        <div class="col-sm-9 col-md-10">
                            <button type="submit" class="btn btn-primary">{{ __('FsLang::panel.button_save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Name Language Modal -->
    <div class="modal fade name-lang-modal" id="langGroupModal" tabindex="-1" aria-labelledby="langGroupModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('FsLang::panel.table_name') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-nowrap">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col" class="w-25">{{ __('FsLang::panel.table_lang_tag') }}</th>
                                    <th scope="col" class="w-25">{{ __('FsLang::panel.table_lang_name') }}</th>
                                    <th scope="col" class="w-50">{{ __('FsLang::panel.table_content') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($optionalLanguages as $lang)
                                    <tr>
                                        <td>
                                            {{ $lang['langTag'] }}
                                            @if ($lang['langTag'] == $defaultLanguage)
                                                <i class="bi bi-info-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('FsLang::panel.default_language') }}" data-bs-original-title="{{ __('FsLang::panel.default_language') }}" aria-label="{{ __('FsLang::panel.default_language') }}"></i>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $lang['langName'] }}
                                            @if ($lang['areaName'])
                                                {{ '('.$lang['areaName'].')' }}
                                            @endif
                                        </td>
                                        <td><input type="text" name="names[{{ $lang['langTag'] }}]" class="form-control name-input" value=""></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--button_confirm-->
                    <div class="text-center">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">{{ __('FsLang::panel.button_confirm') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Desc Language Modal -->
    <div class="modal fade description-lang-modal" id="langGroupDescModal" tabindex="-1" aria-labelledby="langGroupDescModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('FsLang::panel.table_description') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-nowrap">
                            <thead>
                                <tr class="table-info">
                                    <th scope="col" class="w-25">{{ __('FsLang::panel.table_lang_tag') }}</th>
                                    <th scope="col" class="w-25">{{ __('FsLang::panel.table_lang_name') }}</th>
                                    <th scope="col" class="w-50">{{ __('FsLang::panel.table_content') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($optionalLanguages as $lang)
                                    <tr>
                                        <td>
                                            {{ $lang['langTag'] }}
                                            @if ($lang['langTag'] == $defaultLanguage)
                                                <i class="bi bi-info-circle text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ __('FsLang::panel.default_language') }}" data-bs-original-title="{{ __('FsLang::panel.default_language') }}" aria-label="{{ __('FsLang::panel.default_language') }}"></i>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $lang['langName'] }}
                                            @if ($lang['areaName'])
                                                {{ '('.$lang['areaName'].')' }}
                                            @endif
                                        </td>
                                        <td><textarea class="form-control desc-input" name="descriptions[{{ $lang['langTag'] }}]" rows="3"></textarea></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--button_confirm-->
                    <div class="text-center">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">{{ __('FsLang::panel.button_confirm') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Move Modal -->
<div class="modal fade" id="moveModal" tabindex="-1" aria-labelledby="moveModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('FsLang::panel.button_group_move') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    @csrf
                    @method('put')
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">{{ __('FsLang::panel.group_current') }}</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" name="current_group" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">{{ __('FsLang::panel.group_target') }}</label>
                        <div class="col-sm-9">
                            <select class="form-select choose-category" name="category_id" data-action="{{ route('panel.groups.categories.index') }}">
                                <option selected disabled>{{ __('FsLang::panel.select_box_tip_group_category') }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->getLangName($defaultLanguage) }}</option>
                                @endforeach
                            </select>
                            <select class="form-select choose-group mt-3" name="group_id" required>
                                <option selected disabled value="">{{ __('FsLang::panel.select_box_tip_group') }}</option>
                            </select>
                            <div class="form-text">{{ __('FsLang::panel.group_target_desc') }}</div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9"><button type="submit" class="btn btn-primary">{{ __('FsLang::panel.button_confirm') }}</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
