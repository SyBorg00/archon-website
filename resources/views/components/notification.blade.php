<!-- If success occurs, this appears -->
@if (session('success'))

<div
    class="notification notification-success"
    id="notification">

    <div class="notification-icon">
        ✓
    </div>

    <div class="notification-content">

        <strong>
            Success!
        </strong>

        <p>
            {{ session('success') }}
        </p>

    </div>

    <button
        type="button"
        class="notification-close"
        onclick="closeNotification()">

        ×

    </button>

</div>

<!-- If error occurs, this appears -->
@elseif (session('error'))

<div
    class="notification notification-error"
    id="notification">

    <div class="notification-icon">
        !
    </div>

    <div class="notification-content">

        <strong>
            Error!
        </strong>

        <p>
            {{ session('error') }}
        </p>

    </div>

    <button
        type="button"
        class="notification-close"
        onclick="closeNotification()">

        ×

    </button>

</div>

@endif


@if (session('success') || session('error'))


<!-- Script for animation -->
<script>
    function closeNotification() {

        const notification =
            document.getElementById('notification');

        if (!notification) {
            return;
        }

        notification.style.animation =
            'notificationSlideOut 0.3s ease forwards';

        setTimeout(() => {

            notification.remove();

        }, 300);

    }


    setTimeout(() => {

        closeNotification();

    }, 5000);
</script>

@endif