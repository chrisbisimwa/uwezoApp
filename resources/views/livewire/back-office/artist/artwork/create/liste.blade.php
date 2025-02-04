<div class="col-xl-12">
    <div class="table-responsive border border-bottom-0">
        <table class="table text-nowrap table-hover">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Type</th>
                    
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="files-list">
                @forelse ($oeuvres as $index => $oeuvre)
                    <tr>
                        <th scope="row">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <span class="avatar avatar-xs">
                                        
                                        @if ($oeuvre['type'] == 'Image')
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="svg-primary"
                                                enable-background="new 0 0 24 24"
                                                viewBox="0 0 24 24">
                                                <path opacity="0.3"
                                                    d="M19 2H5a3.009 3.009 0 0 0-3 3v8.86l3.88-3.88a3.075 3.075 0 0 1 4.24 0l2.871 2.887.888-.888a3.008 3.008 0 0 1 4.242 0L22 15.86V5a3.009 3.009 0 0 0-3-3z">
                                                </path>
                                                <path opacity="1"
                                                    d="M10.12 9.98a3.075 3.075 0 0 0-4.24 0L2 13.86V19a3.009 3.009 0 0 0 3 3h14c.815 0 1.595-.333 2.16-.92L10.12 9.98z">
                                                </path>
                                                <path opacity="0.1"
                                                    d="m22 15.858-3.879-3.879a3.008 3.008 0 0 0-4.242 0l-.888.888 8.165 8.209c.542-.555.845-1.3.844-2.076v-3.142z">
                                                </path>
                                            </svg>
                                        @elseif($oeuvre['type'] == 'Vidéo')
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="svg-secondary"
                                                enable-background="new 0 0 24 24"
                                                viewBox="0 0 24 24">
                                                <path opacity="0.3"
                                                    d="M14 18H5a3.003 3.003 0 0 1-3-3V9a3.003 3.003 0 0 1 3-3h9a3.003 3.003 0 0 1 3 3v6a3.003 3.003 0 0 1-3 3z">
                                                </path>
                                                <path opacity="1"
                                                    d="M21.895 7.554a1 1 0 0 0-1.342-.449l-3.564 1.783c.001.038.01.073.011.112v6c0 .039-.01.074-.011.112l3.564 1.783A1 1 0 0 0 22 16V8a1 1 0 0 0-.105-.446z">
                                                </path>
                                            </svg>
                                        @elseif($oeuvre['type'] == 'Audio')
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="svg-info"
                                                enable-background="new 0 0 24 24"
                                                viewBox="0 0 24 24">
                                                <path opacity="0.3"
                                                    d="M6 21H3a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h3a3.003 3.003 0 0 1 3 3v2a3.003 3.003 0 0 1-3 3zm15 0h-3a3.003 3.003 0 0 1-3-3v-2a3.003 3.003 0 0 1 3-3h3a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1z">
                                                </path>
                                                <path opacity="1"
                                                    d="M12 3C6.477 3 2 7.477 2 13v1a1 1 0 0 1 1-1h1a8 8 0 0 1 16 0h1a1 1 0 0 1 1 1v-1c0-5.523-4.477-10-10-10z">
                                                </path>
                                            </svg>
                                        @endif
                                    </span>
                                </div>
                                <div>
                                    {{ $oeuvre['name'] }}
                                </div>
                            </div>
                        </th>
                        <td>{{ $oeuvre['type'] }}</td>
                        
                        <td>{{$oeuvre['date']}}</td>
                        <td>{{$oeuvre['status']}}</td>
                        <td>
                            <div class="hstack gap-2 fs-15">
                                <a href="javascript:void(0);"
                                    class="btn btn-icon btn-sm btn-info-transparent rounded-pill"><i
                                        class="ri-eye-line"></i></a>
                                <a wire:click="deleteArt({{ $index }})"
                                    class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                        class="ri-delete-bin-line"></i></a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Aucune donnée
                            trouvée</td>
                    </tr>
                @endforelse


            </tbody>
            <tfoot>
                <tr>

                </tr>
            </tfoot>
        </table>
    </div>
</div>


