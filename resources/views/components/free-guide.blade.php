<section class="lead-magnet py-5" id="free">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h2 class="mb-3">Get Our Free Copy Writing Guide</h2>
                <p class="mb-4">Learn 10 powerful tips to boost your website rankings.</p>
                
                <form id="freeGuideForm" method="POST" action="{{ route('free-guide.send') }}" class="d-flex flex-column flex-sm-row gap-2">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    <button type="submit" class="btn btn-primary flex-shrink-0">Get My Free Guide</button>
                </form>

                <div id="loadingSpinner" class="spinner-border text-primary mt-3" role="status" style="display:none;">
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.getElementById('freeGuideForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const form = this;
    const spinner = document.getElementById('loadingSpinner');
    const input = form.querySelector('input[name="email"]');
    const button = form.querySelector('button[type="submit"]');

    // FormData PEHLE banao (warna disabled field skip ho jati hai)
    const payload = new FormData(form);

    // Lock UI
    input.disabled = true;
    button.disabled = true;
    spinner.style.display = 'inline-block';

    try {
        const res = await fetch(form.action, {
            method: 'POST',
            body: payload,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json'
            },
            credentials: 'same-origin' // session/cookies bhejne ke liye
        });

        // JSON parse try-catch style
        const data = await res.json().catch(() => ({}));

        // Alert se just pehle spinner band
        spinner.style.display = 'none';

        if (res.ok) {
            await Swal.fire({
                title: 'Success!',
                text: data.message ?? 'Guide sent to your email.',
                icon: 'success'
            });
            form.reset();
        } else {
            const msg = data.message || data.error || 'Something went wrong.';
            await Swal.fire({
                title: 'Error',
                text: msg,
                icon: 'error'
            });
        }
    } catch (err) {
        spinner.style.display = 'none';
        await Swal.fire({
            title: 'Error',
            text: 'Network error. Try again.',
            icon: 'error'
        });
    } finally {
        // SweetAlert band hone ke baad re-enable
        input.disabled = false;
        button.disabled = false;
    }
});
</script>

{{-- @endpush --}}

<style>
    .lead-magnet {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .lead-magnet form input {
        /* padding: 10px;
        border-radius: 6px;
        width: 40%; */
        outline: none
    }

    .lead-magnet form {
        width: 100%;
        text-align: center
    }
</style>
