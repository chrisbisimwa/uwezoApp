<div class="row">
    <div class="col-xxl-4 col-xl-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body p-0">
                <div class="d-sm-flex align-items-top p-4 border-bottom border-block-end-dashed main-profile-cover">
                    <div>
                        <span class="avatar avatar-xxl avatar-rounded online me-3">
                            @if (Auth::user()->profile_image)
                                <img src="{{ asset('storage/' . Auth::user()->profile_image) }}"
                                    alt="{{ Auth::user()->name }}">
                            @else
                                <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center"
                                    style="width: 90px; height: 90px;">
                                    <span class="fw-semibold">
                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                        {{ strtoupper(substr(Auth::user()->name, strpos(Auth::user()->name, ' ') + 1, 1)) }}
                                    </span>
                                </div>
                            @endif
                        </span>
                    </div>
                    <div class="flex-fill main-profile-info">
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold mb-1 text-fixed-white">{{ Auth::user()->name }}</h6>

                        </div>
                        <p class="mb-1 text-muted text-fixed-white op-7">{{ Auth::user()->role }}</p>


                    </div>
                </div>

                <div class="p-4 border-bottom border-block-end-dashed">
                    <p class="fs-15 mb-2 me-4 fw-semibold">Contact Information :</p>
                    <div class="text-muted">
                        <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-mail-line align-middle fs-14"></i>
                            </span>
                            {{ Auth::user()->email }}
                        </p>
                        {{-- <p class="mb-2">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-phone-line align-middle fs-14"></i>
                            </span>
                            +(555) 555-1234
                        </p>
                        <p class="mb-0">
                            <span class="avatar avatar-sm avatar-rounded me-2 bg-light text-muted">
                                <i class="ri-map-pin-line align-middle fs-14"></i>
                            </span>
                            MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071
                        </p> --}}
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="col-xxl-8 col-xl-12">
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body p-0">
                        <div
                            class="p-3 border-bottom border-block-end-dashed d-flex align-items-center justify-content-between">
                            <div>
                                <ul class="nav nav-tabs mb-0 tab-style-6 justify-content-start" id="myTab"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                            data-bs-target="#activity-tab-pane" type="button" role="tab"
                                            aria-controls="activity-tab-pane" aria-selected="true"><i
                                                class="ri-gift-line me-1 align-middle d-inline-block"></i>Profile</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                            data-bs-target="#posts-tab-pane" type="button" role="tab"
                                            aria-controls="posts-tab-pane" aria-selected="false" tabindex="-1"><i
                                                class="ri-bill-line me-1 align-middle d-inline-block"></i>Utilisateurs</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                            data-bs-target="#followers-tab-pane" type="button" role="tab"
                                            aria-controls="followers-tab-pane" aria-selected="false" tabindex="-1"><i
                                                class="ri-money-dollar-box-line me-1 align-middle d-inline-block"></i>Abonnés</button>
                                    </li>

                                </ul>
                            </div>
                            <div>


                            </div>
                        </div>
                        <div class="p-3">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active fade p-0 border-0" id="activity-tab-pane"
                                    role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Information de l'utilisateur
                                                    </div>

                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                                                        <input type="text" class="form-control"
                                                            aria-describedby="Nom d'utilisateur" wire:model="userName">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                                        <input type="email" class="form-control"
                                                            aria-describedby="Email" wire:model="userEmail" disabled>

                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1"
                                                            class="form-label">Rôle</label>
                                                        <select name="role" class="form-control"
                                                            wire:model="userRole" disabled>
                                                            <option value="">Choisir un rôle</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="user">Utilisateur</option>
                                                        </select>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Mettre à
                                                        jour</button>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="col-sm-6">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Mot de passe
                                                    </div>

                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Ancien mot
                                                            de
                                                            passe</label>
                                                        <input type="password"
                                                            class="form-control @error('oldPassword') is-invalid @enderror"
                                                            aria-describedby="Nom d'utilisateur"
                                                            wire:model="oldPassword">
                                                        @error('oldPassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Nouveau mot
                                                            de
                                                            passe</label>
                                                        <input type="password"
                                                            class="form-control @error('userPassword') is-invalid @enderror"
                                                            wire:model="userPassword">
                                                        @error('userPassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Confirmer
                                                            le mot de
                                                            passe</label>
                                                        <input type="password"
                                                            class="form-control @error('userPassword') is-invalid @enderror"
                                                            aria-describedby="Email"
                                                            wire:model="userPassword_confirmation">
                                                        @error('userPassword')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <button type="submit" class="btn btn-primary"
                                                        wire:click="changePassword()">Modifier le mot de passe</button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>




                                </div>
                                <div class="tab-pane fade p-0 border-0" id="posts-tab-pane" role="tabpanel"
                                    aria-labelledby="posts-tab" tabindex="0">
                                    <div class="col-xl-12">
                                        <div class="d-flex mb-3 align-items-center justify-content-between">
                                            <p class="mb-0 fw-semibold fs-14">Liste d'utilisateurs</p>
                                            @if (Auth::user()->role == 'admin')
                                                <button type="button" class="btn btn-primary m-1"
                                                    data-bs-toggle="modal" data-bs-target="#addUserModalXl">

                                                    Ajouter
                                                </button>
                                            @endif
                                            <div class="modal fade" id="addUserModalXl" tabindex="-1"
                                                aria-labelledby="addUserModalXlLabel" style="display: none;"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    @livewire('back-office.user.add-user')
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive border border-bottom-0">
                                            <table class="table text-nowrap table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Nom</th>
                                                        <th scope="col">Rôle</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="files-list">
                                                    @forelse ($users as $user)
                                                        <tr>
                                                            <td scope="row">

                                                                {{ $user->email }}

                                                            </td>
                                                            <td>{{ $user->name }}</td>
                                                            <td>{{ $user->role }}</td>

                                                            <td>
                                                                <div class="hstack gap-2 fs-15">

                                                                    @if (Auth::user()->role == 'admin')
                                                                       
                                                                            <button type="button"
                                                                                class="btn btn-icon btn-sm btn-primary-transparent rounded-pill"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#editUserModalXl-{{ $user->id }}">

                                                                                <i
                                                                                class="ri-pencil-line"></i>
                                                                            </button>
                                                                        <div class="modal fade" id="editUserModalXl-{{ $user->id }}"
                                                                            tabindex="-1"
                                                                            aria-labelledby="editUserModalXlLabel"
                                                                            style="display: none;" aria-hidden="true">
                                                                            <div class="modal-dialog modal-xl">
                                                                                @livewire('back-office.user.edit-user', ['user' => $user])
                                                                            </div>
                                                                        </div>

                                                                        <a wire:click="deleteUser({{ $user->id }})"
                                                                            class="btn btn-icon btn-sm btn-danger-transparent rounded-pill"><i
                                                                                class="ri-delete-bin-line"></i></a>
                                                                    @endif
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
                                        <div class="card-footer">


                                            {{ $users->links('vendor.livewire.backend') }}
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade p-0 border-0" id="followers-tab-pane" role="tabpanel"
                                    aria-labelledby="followers-tab" tabindex="0">
                                    <div class="col-xl-12">
                                        <div class="table-responsive border border-bottom-0">
                                            <table class="table text-nowrap table-hover">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Date</th>

                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="files-list">
                                                    @forelse ($subscribers as $subscriber)
                                                        <tr>
                                                            <td scope="row">

                                                                {{ $subscriber->email }}

                                                            </td>
                                                            <td>{{ $subscriber->subscribed_at }}</td>

                                                            <td>
                                                                <div class="hstack gap-2 fs-15">

                                                                    <a wire:click="deleteSubscriber({{ $subscriber->id }})"
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
                                        <div class="card-footer">


                                            {{ $subscribers->links('vendor.livewire.backend') }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
