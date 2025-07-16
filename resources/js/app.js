import "./bootstrap";
import "preline";

// Import specific Preline plugins
import "@preline/file-upload";
import "@preline/overlay";
import "@preline/theme-switch";
import "@preline/toggle-password";

// Import Dropzone
import { Dropzone } from "dropzone";
import "dropzone/dist/dropzone.css";

// Import Lodash
import _ from "lodash";

// Make available globally
window.Dropzone = Dropzone;
window._ = _;

document.addEventListener("DOMContentLoaded", function () {
    console.log("Dropzone loaded:", typeof Dropzone !== "undefined");
    console.log(
        "HSFileUpload available:",
        typeof window.HSFileUpload !== "undefined",
    );

    // Initialize Preline components
    if (window.HSFileUpload) {
        window.HSFileUpload.autoInit();
        console.log("HSFileUpload initialized");
    }

    // Also try manual initialization
    setTimeout(() => {
        const fileUploadElements = document.querySelectorAll(
            "[data-hs-file-upload]",
        );
        fileUploadElements.forEach((el) => {
            if (
                window.HSFileUpload &&
                !el.hasAttribute("data-hs-file-upload-initialized")
            ) {
                try {
                    new window.HSFileUpload(el);
                    el.setAttribute("data-hs-file-upload-initialized", "true");
                    console.log("File upload manually initialized for:", el);
                } catch (error) {
                    console.error("Error initializing file upload:", error);
                }
            }
        });
    }, 500);
});
