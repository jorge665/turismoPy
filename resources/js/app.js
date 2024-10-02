import * as bootstrap from 'bootstrap';

Livewire.hook('request', ({ fail }) => {
    fail(async ({ status, preventDefault }) => {
        if (status === 419) {
            preventDefault();
            try {
                const response = await fetch('/refresh-csrf');
                const data = await response.json();
                document.querySelector('meta[name="csrf-token"]').setAttribute('content', data.csrf_token);
            } catch (error) {
                console.error('Error refreshing CSRF token:', error);
            }
        }
    });
});