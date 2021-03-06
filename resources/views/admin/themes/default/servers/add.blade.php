@extends('admin.themes.default.layouts.app')

@section('content')
    @include('admin.themes.default.layouts.header')
@endsection

@section('container-fluid')
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">添加服务器</h3>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form method="post" id="add-form" action="{{route('admin.server.add')}}">
                        {{csrf_field()}}
                        <h6 class="heading-small text-muted mb-4">基础信息</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">服务器名称</label>
                                        <input type="text" class="form-control form-control-alternative"
                                               placeholder="服务器名称,便于识别" value="{{old('title')}}" name="title">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">服务器IP</label>
                                        <input type="text" name="ip" class="form-control form-control-alternative"
                                               value="{{old('ip')}}" placeholder="请填写服务器IP">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">服务器Key</label>
                                        <input type="text" name="key" class="form-control form-control-alternative"
                                               value="{{old('key')}}" placeholder="服务器安全码（根据服务器插件不同填写，可为空）">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">服务端口</label>
                                        <input type="text" name="port" class="form-control form-control-alternative"
                                               value="{{old('port')}}" placeholder="API接口端口（默认根据插件使用默认端口，可为空）">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">插件</label>
                                        <select class="custom-select" id="inputGroupSelect02" name="plugin">
                                            @if(!empty($serverPlugin))
                                                @foreach($serverPlugin as $plugin)
                                                    <option value="{{$plugin}}">{{$plugin}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @include('admin.themes.default.layouts.errors')
                        <input type="submit" class="btn btn-primary" value="新建">
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
