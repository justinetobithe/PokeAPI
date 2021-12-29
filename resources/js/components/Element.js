import { ClipLoader } from "react-spinners";
import { toast } from "react-toastify";
import { Modal as M } from "react-bootstrap";

toast.configure();

export const notify = (message, type = "info") => {
    toast(message, {
        autoClose: 3000,
        closeButton: true,
        type: type,
        position: "bottom-right",
        pauseOnHover: false,
        pauseOnFocusLoss: false,
    })
}

export const LoadingOverlay = ({ loading }) => {
    if (!loading) return null;
    return (
        <div className="app-loading-container">
            <ClipLoader
                loading={loading}
                size={80}
                css={{
                    borderWidth: 5,
                }}
                color="rgba(100, 199, 255, 1)"
            />
        </div>
    )
}

export const LoadingElement = ({ loading }) => {
    if (!loading) return null;
    return (
        <div>
            <ClipLoader
                loading={loading}
                size={80}
                css={{
                    borderWidth: 5,
                }}
                color="rgba(100, 199, 255, 1)"
            />
        </div>
    )
}

export const Modal = ({
    children,
    heading,
    footer,
    isShown,
    onHide,
    ...rest
}) => {
    return (
        <M
            centered
            show={isShown}
            onHide={onHide}
            backdrop="static"
            keyboard={false}
            centered
            {...rest}
        >
            <M.Header closeButton>
                <M.Title>{heading}</M.Title>
            </M.Header>
            <M.Body>{children}</M.Body>
            {footer ? <M.Footer>{footer}</M.Footer> : null}
        </M>
    )
}