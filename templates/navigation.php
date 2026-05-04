<?php
$session_id = $_COOKIE['PHPSESSID'] ?? '';
$is_authenticated = $user->signedIn() ? 'true' : 'false';
$is_admin = $user->isAdmin() ? 'true' : 'false';
$is_internal = $user->isInternal() ? 'true' : 'false';
$is_customer = $user->isCustomer() ? 'true' : 'false';

$wp_header = @json_decode(file_get_contents(
    WP_BASE_URL . '/wp-json/hilife/v1/header?authenticated=' . $is_authenticated . '&is_admin=' . $is_admin . '&is_internal=' . $is_internal . '&is_customer=' . $is_customer,
    false
), true);
echo $wp_header['html'] ?? '';
?>

<?php if ($user->signedIn()) : ?>
<div style="background:var(--dark);border-bottom:1px solid var(--border);padding:0 40px;">
    <div style="display:flex;align-items:center;height:44px;gap:2rem;">
        <?php if ($user->isAdmin()) : ?>
            <a href="/admin/events" style="font-size:0.65rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-dim);text-decoration:none;">Admin</a>
        <?php endif; ?>
        <?php if ($user->isInternal()) : ?>
            <a href="/planner/view/bookings" style="font-size:0.65rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-dim);text-decoration:none;">My Bookings</a>
        <?php endif; ?>
        <?php if ($user->isCustomer()) : ?>
            <a href="/planner" style="font-size:0.65rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-dim);text-decoration:none;">Music Planner</a>
        <?php endif; ?>
        <a href="/account" style="font-size:0.65rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-dim);text-decoration:none;">Account</a>
        <a href="/auth/revoke" style="font-size:0.65rem;letter-spacing:0.15em;text-transform:uppercase;color:var(--text-dim);text-decoration:none;margin-left:auto;">Sign out</a>
    </div>
</div>
<?php endif; ?>
