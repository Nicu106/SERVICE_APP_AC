<!-- resources/view/components/instagram-post.blade.php -->
<link rel="stylesheet" href="{{ asset('style/home.css') }}">

<div class="custom-card">

    <!-- Post Header: User Profile -->
    <div class="card-header">
        <div class="card-user">
            <img src="{{ $profilePic }}" alt="Profile Picture" class="card-profile-image" width="40" height="40" style="object-fit: cover;">
            <p>{{ $username }}</p>
        </div>
        <div class="card-job-title">{{ $jobTitle }}</div>
    </div>

    <!-- Post Image -->
    <div class="card-image">
        <img src="{{ $postImage }}" class="card-img-top" alt="Post Image">
    </div>

    <!-- Post Actions and Description -->
    <div class="card-bottom">
        <div class="card-actions">
            <!-- Action icons (like, comment, share) -->
            <div class="buttons">
                <button class="like-icon"><i class="bi bi-heart"></i></button> <!-- Like Icon -->
                <button><i class="bi bi-chat"></i></button> <!-- Comment Icon -->
                <button class="send-icon"><i class="bi bi-send"></i></button> <!-- Share Icon -->
            </div>

            <div class="price-tag">{{ $price }}</div>
        </div>

        <!-- Like Count and Post Description -->
        <p class="card-likes">{{ $likes }} aprecieri</p>
        <p class="card-description"><span class="username">{{ $username }}:</span> {{ $description }}</p>
    </div>

</div>