<div class="widget">
    <h5 class="widget-title">Restez informé</h5>
    <div class="andro_footer-newsletter">
        <p>Abonnez-vous à notre <span class="color-primary">Newsletter</span> pour recevoir les mises à jour dans votre
            boîte de réception.</p>
            <div class="input-group">
                <input type="text" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Addresse Email" wire:model="email">
                
                <button class="button primary" type="submit" wire:click="subscribe"> <i class="fal fa-paper-plane"></i> </button>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong class="color-primary">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    </div>
</div>
