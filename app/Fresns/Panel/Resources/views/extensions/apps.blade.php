@extends('FsView::commons.sidebarLayout')

@section('sidebar')
    @include('FsView::extensions.sidebar')
@endsection

@section('content')
    <!--apps header-->
    <div class="row mb-4 border-bottom">
        <div class="col-lg-7">
            <h3>{{ __('FsLang::panel.sidebar_apps') }}</h3>
            <p class="text-secondary"><i class="bi bi-layers"></i> {{ __('FsLang::panel.sidebar_apps_intro') }}</p>
        </div>
        <div class="col-lg-5">
            <div class="input-group mt-2 mb-4 justify-content-lg-end">
                <a class="btn btn-outline-secondary" href="#" role="button">{{ __('FsLang::panel.button_support') }}</a>
            </div>
        </div>
    </div>
    <!--apps list-->
    <div class="table-responsive">
        <table class="table table-hover align-middle fs-7">
            <thead>
                <tr class="table-info fs-6">
                    <th scope="col">{{ __('FsLang::panel.table_name') }}</th>
                    <th scope="col" class="w-50">{{ __('FsLang::panel.table_description') }}</th>
                    <th scope="col">{{ __('FsLang::panel.author') }}</th>
                    <th scope="col">{{ __('FsLang::panel.table_options') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apps as $app)
                    <tr>
                        <td class="py-3">
                            <span class="fs-6"><a href="{{ $marketplaceUrl.'/detail/'.$app->fskey }}" target="_blank" class="link-dark fresns-link">{{ $app->name }}</a></span>
                            <span class="badge bg-secondary fs-9">{{ $app->version }}</span>
                            @if ($app->is_upgrade)
                                <a href="{{ route('panel.upgrades') }}" class="badge rounded-pill bg-danger link-light fs-9 fresns-link">{{ __('FsLang::panel.new_version') }}</a>
                            @endif
                        </td>
                        <td>{{ $app->description }}</td>
                        <td>
                            @if ($app->author_link)
                                <a href="{{ $app->author_link }}" target="_blank" class="link-info fresns-link fs-7">{{ $app->author }}</a>
                            @else
                                <span class="fs-7">{{ $app->author }}</span>
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-link btn-sm text-danger fresns-link">{{ __('FsLang::panel.button_delete') }}</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!--panel list end-->
@endsection