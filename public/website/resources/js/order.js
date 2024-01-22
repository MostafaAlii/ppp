document.addEventListener('DOMContentLoaded', function () {
    let selectedAdditionalCostPerPhoto = 0;

    const serviceRows = document.querySelectorAll('.service_row');

    serviceRows.forEach(function (row) {
        let serviceName = row.dataset.serviceName;

        const fileInputs = row.querySelectorAll('input.photo-upload-input[type="file"]');
        const uploadProgress = document.getElementById('upload-progress');

        fileInputs.forEach((input) => {
            input.addEventListener('change', function () {
                const selectedFiles = this.files;
                const previewContainer = this.parentNode.querySelector('.imgs_preview_container');

                clearPreviewContainer(previewContainer);
                uploadProgress.value = 0; // Reset progress value

                for (let i = 0; i < selectedFiles.length; i++) {
                    const file = selectedFiles[i];
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        const imgElement = new Image();
                        imgElement.onload = function () {
                            const canvas = document.createElement('canvas');
                            const ctx = canvas.getContext('2d');
                            canvas.width = 100;
                            canvas.height = 100;
                            ctx.drawImage(imgElement, 0, 0, 100, 100);
                            const resizedDataUrl = canvas.toDataURL();

                            const previewImgContainer = document.createElement('div');
                            previewImgContainer.classList.add('preview-image-container');

                            const previewImgElement = document.createElement('img');
                            previewImgElement.src = resizedDataUrl;
                            previewImgContainer.appendChild(previewImgElement);

                            const deleteButton = document.createElement('button');
                            deleteButton.classList.add('delete-button');
                            deleteButton.innerHTML = 'x';
                            deleteButton.addEventListener('click', function () {
                                previewImgContainer.remove();
                                updatePhotosCount(serviceName);
                            });
                            previewImgContainer.appendChild(deleteButton);

                            previewContainer.appendChild(previewImgContainer);

                            updatePhotosCount(serviceName);
                        };
                        imgElement.src = e.target.result;
                    };

                    reader.onprogress = function (e) {
                        if (e.lengthComputable) {
                            const progress = (e.loaded / e.total) * 100;
                            uploadProgress.value = progress; // Update progress value
                        }
                    };

                    reader.readAsDataURL(file);
                }

                updatePhotosCost();
                updateCostDependOnSelectedTime(serviceName);
            });
        });

        // Other functions...
    });

    // Other functions...

    function clearPreviewContainer(container) {
        while (container.firstChild) {
            container.removeChild(container.firstChild);
        }
    }
});