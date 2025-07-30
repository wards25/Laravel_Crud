<div class="relative w-full h-48 rounded-lg overflow-hidden">
    <div class="absolute inset-0 bg-gray-700 rounded-lg animate-pulse skeleton-img z-10"></div>

    <img src="{{ $src }}" loading="lazy" alt="{{ $alt ?? 'Image' }}"
        class="real-img w-full h-48 object-cover rounded-lg opacity-0 transition-opacity duration-700 ease-in-out z-0" />
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll(".real-img");

        images.forEach((img) => {
            img.addEventListener("load", () => {
                img.classList.add("opacity-100");

                const skeleton = img.previousElementSibling;
                if (skeleton && skeleton.classList.contains("skeleton-img")) {
                    skeleton.remove();
                }
            });
        });
    });
</script>
