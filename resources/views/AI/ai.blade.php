@extends('layouts.navbar')
@section('title', 'AI')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">

<div class="min-h-screen bg-gradient-to-br py-6 flex flex-col justify-center sm:py-12">
  <div class="max-w-3xl mx-auto w-full px-4">
    <div class="bg-white shadow-lg rounded-xl border border-emerald-100">
      <!-- Header -->
      <div class="bg-green-700 px-6 py-4 rounded-t-xl">
        <h2 class="text-xl font-semibold text-white flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
          </svg>
          <h1 class="text-white text-2xl font-bold">
            Chat dengan AI Assistant
          </h1>
        </h2>
      </div>

      <!-- Chat History -->
      <div id="chatHistory" class="h-[400px] overflow-y-auto p-4 space-y-4">
        <!-- Messages will be added here -->
      </div>

      <!-- Input Area -->
      <div class="border-t border-green-100 p-4">
        <div class="flex space-x-3">
          <input type="text"
            id="userInput"
            class="flex-1 rounded-lg border border-green-200 px-4 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-500 focus:border-green-500 transition-all duration-200"
            placeholder="Ketik pertanyaan Anda di sini..." />
          <button onclick="sendMessage()"
              class="bg-green-700 hover:bg-green-800 text-white rounded-lg px-4 py-2 transition duration-200 flex items-center gap-2 text-sm">
            <span>Kirim</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
              <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const chatHistory = document.getElementById('chatHistory');

  async function sendMessage() {
    const input = document.getElementById('userInput').value;
    if (!input) {
      alert('Silakan masukkan pesan');
      return;
    }

    // Menampilkan pesan user
    addMessage(input, 'user');

    // Menampilkan loading
    const loadingMessage = addMessage('Sedang mengetik...', 'ai');

    try {
      const response = await fetch(
        'https://openrouter.ai/api/v1/chat/completions', {
          method: 'POST',
          headers: {
            Authorization: 'Bearer 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',
            'HTTP-Referer': 'https://www.andalas-publikasi-jaya.com',
            'X-Title': 'andalas-publikasi-jaya',
            'Content-Type': 'application/json',
          },
          body: JSON.stringify({
            model: 'meta-llama/llama-3.3-70b-instruct:free',
            messages: [{
              role: 'user',
              content: input
            }],
          }),
        }
      );
      const data = await response.json();
      const markdownText = data.choices?.[0]?.message?.content ||
        'Maaf, saya tidak bisa memberikan jawaban untuk sekarang.';

      // Menghapus pesan loading dan menampilkan respons AI
      loadingMessage.remove();
      addMessage(markdownText, 'ai');

      // Clear input
      document.getElementById('userInput').value = '';

    } catch (error) {
      loadingMessage.remove();
      addMessage('Error: ' + error.message, 'ai');
    }
  }

  function addMessage(content, type) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `flex ${type === 'user' ? 'justify-end' : 'justify-start'} items-end space-x-2`;

    const innerDiv = document.createElement('div');
    innerDiv.className = `max-w-[70%] rounded-lg p-3 ${
      type === 'user' 
        ? 'bg-emerald-600 text-white rounded-br-none' 
        : 'bg-gray-100 text-gray-800 rounded-bl-none'
    }`;

    innerDiv.classList.add('animate-fade-in');

    innerDiv.innerHTML = type === 'user' ? content : marked.parse(content);
    messageDiv.appendChild(innerDiv);
    chatHistory.appendChild(messageDiv);
    chatHistory.scrollTop = chatHistory.scrollHeight;
    return messageDiv;
  }

  // Event listener untuk tombol Enter
  document.getElementById('userInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
      sendMessage();
    }
  });
</script>

<style>
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(8px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in {
    animation: fadeIn 0.2s ease-out forwards;
  }
</style>

@endsection