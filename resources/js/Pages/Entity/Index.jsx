import React, { useState } from "react";
import Authenticated from "@/Layouts/AuthenticatedLayout";
import PrimaryButton from "@/Components/PrimaryButton";
import { Head } from "@inertiajs/react";
import TextInput from "@/Components/TextInput";


function UpdatePassword() {
    const [currentPassword, setCurrentPassword] = useState("");
    const [newPassword, setNewPassword] = useState("");
    const [newPasswordConfirmation, setNewPasswordConfirmation] = useState("");

    const handleSubmit = (e) => {
        e.preventDefault();

        // send request to the server
    };

    return (
        <Authenticated auth={props.auth}>
            <Head title="Update Password" />

            <div className="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                <h1 className="text-2xl font-semibold text-gray-900">Update Password</h1>

                <div className="mt-8">
                    <form onSubmit={handleSubmit}>
                        <div className="space-y-4">
                            <TextInput
                                label="Current Password"
                                type="password"
                                name="currentPassword"
                                value={currentPassword}
                                onChange={(e) => setCurrentPassword(e.target.value)}
                            />

                            <TextInput
                                label="New Password"
                                type="password"
                                name="newPassword"
                                value={newPassword}
                                onChange={(e) => setNewPassword(e.target.value)}
                            />

                            <TextInput
                                label="Confirm New Password"
                                type="password"
                                name="newPasswordConfirmation"
                                value={newPasswordConfirmation}
                                onChange={(e) => setNewPasswordConfirmation(e.target.value)}
                            />
                        </div>

                        <div className="mt-8">
                            <PrimaryButton type="submit">Update Password</PrimaryButton>
                        </div>
                    </form>
                </div>
            </div>
        </Authenticated>
    )

}
