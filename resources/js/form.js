//script pentru inserare in baza de date
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#myForm');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const nume = formData.get('nume');
        const prenume = formData.get('prenume');
        const dataNasterii = formData.get('data');
        const comentariu = formData.get('comentariu');

        const datas = {
            nume: nume,
            prenume: prenume,
            data: dataNasterii,
            comentariu: comentariu,
        };

        fetch('/store', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify(datas),
        })
        .then(response => response.json())
        .then(result => {
            console.log(result);
            alert('Form data saved successfully!');
            form.reset();
        })
        .catch(error => {
            console.error(error);
            alert('An error occurred. Please try again.');
        });
    });
});