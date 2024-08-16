import './bootstrap';
import confetti from 'canvas-confetti';

document.getElementById('playButton').addEventListener('click', async () => {
    const card = document.getElementById('card');
    const loading = document.getElementById('loading');

    card.classList.add('hidden');
    loading.classList.remove('hidden');

    try {
        const response = await fetch('/api/job');
        const data = await response.json();
        const {message, title, salary, emoji} = data;
        const socialMediaMessage = `¡Mi nuevo trabajo en la asamble es ${title}! ganando: $${salary} ${emoji}, Descubre cuál sería tu plaza y cuánto podrías ganar ➡️ https://tu-plaza-fantasma-sv.fly.dev/`;

        const newCard = document.createElement('div');
        newCard.classList.add('bg-white', 'rounded-lg', 'shadow-lg', 'p-6', 'max-w-lg', 'w-full', 'animate-fade-in');
        newCard.innerHTML = `
            <h2 class="text-2xl font-bold mb-4 text-center">Resultado 🎉</h2>
            <p class="text-gray-700 text-center mb-6">${message}</p>
            <div class="flex justify-center space-x-4 mb-6">
                <a href="https://wa.me/?text=${encodeURIComponent(socialMediaMessage)}" target="_blank" class="w-full bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-700 text-center">Compartir en WhatsApp</a>
                <a href="https://twitter.com/intent/tweet?text=${encodeURIComponent(socialMediaMessage)}" target="_blank" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700 text-center">Compartir en Twitter</a>
            </div>
            <button id="replayButton" class="w-full bg-gray-900 text-white font-bold py-2 px-4 rounded hover:bg-gray-700 mt-4">
                Jugar de Nuevo 🔄
            </button>
        `;

        loading.classList.add('hidden');
        document.body.appendChild(newCard);

        setTimeout(() => {
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 }
            });
        }, 500);

        document.getElementById('replayButton').addEventListener('click', () => {
            newCard.classList.add('animate-fade-out');
            newCard.addEventListener('animationend', () => {
                newCard.remove();
                card.classList.remove('hidden');
                card.classList.add('animate-fade-in');
            }, { once: true });
        });


    } catch (error) {
        console.error('Error fetching the job:', error);
        card.classList.remove('hidden');
        loading.classList.add('hidden');
    }
});

const style = document.createElement('style');
style.innerHTML = `
    @keyframes fade-in {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    @keyframes fade-out {
        from { opacity: 1; }
        to { opacity: 0; }
    }
    .animate-fade-in {
        animation: fade-in 0.5s ease-in-out;
    }
    .animate-fade-out {
        animation: fade-out 0.5s ease-in-out;
    }
`;
document.head.appendChild(style);
