<x-layout>
    <section id="report" class="report tw-flex tw-min-h-screen tw-justify-center tw-items-center dark:tw-bg-gray-900">
        <div class="tw-flex tw-container tw-mx-auto tw-justify-center tw-items-center tw-py-10">
            <div class="tw-flex tw-flex-col form dark:tw-bg-gray-800 tw-rounded-lg  tw-px-5 tw-py-6 tw-w-1/2">
                <h1 class="tw-text-3xl tw-text-gray-400 tw-font-bold mb-4">Report Corruption</h1>
                <form action="" class="tw-grid tw-grid-cols-1 tw-gap-3 tw-w-full" enctype="multipart/form-data">
                    <div class="tw-flex tw-flex-col">
                        <label for="" class="tw-mb-2 tw-text-gray-400 tw-font-medium">Corruption Type</label>
                        <select name="type" id="" class="tw-w-full tw-block tw-rounded-md">
                            <option value="">Select Corruption Type</option>
                            @foreach ($corruptionTypes as $type)
                                <option value="{{ $type->name }}">{{ $type->name }}</option>
                            @endforeach

                        </select>
                        @error('type')
                            <p class="tw-my-2 tw-text-gray-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="tw-flex tw-flex-col">
                        <label for="" class="tw-mb-2 tw-text-gray-400 tw-font-medium">Date</label>
                        <input type="date" name="" id=""
                            class="tw-text-gray-300  tw-w-full tw-block tw-rounded-md" mu required>
                    </div>
                    <div class="tw-flex tw-flex-col">
                        <label for="" class="tw-mb-2 tw-text-gray-400 tw-font-medium">Location</label>
                        <input type="text" name="location" id="" class="tw-w-full tw-block tw-rounded-md"
                            required autofocus autocomplete="username" placeholder="Location">
                        @error('location')
                            <p class="tw-my-2 tw-text-gray-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="tw-flex tw-flex-col">
                        <label for="" class="tw-mb-2 tw-text-gray-400 tw-font-medium">Upload Evidence</label>
                        <input type="file" name="" id=""
                            class="tw-w-full tw-block tw-rounded-md tw-text-white" required autofocus
                            autocomplete="username" multiple>
                    </div>
                    <div class="tw-flex tw-flex-col">
                        <label for="" class="tw-mb-2 tw-text-gray-400 tw-font-medium">Identity (Anonymous /
                            Reveal)</label>
                        <select name="identity" id="" class="tw-w-full tw-block tw-rounded-md">
                            <option value="1">Anonymous</option>
                            <option value="2">Open</option>
                        </select>
                    </div>

                    <div class="">
                        <label for="" class="tw-mb-2 tw-text-gray-400 tw-font-medium">Description</label>
                        <textarea name="" id="" cols="30" rows="3" class="tw-w-full tw-block tw-rounded-md" required
                            autofocus autocomplete="username" placeholder="Corruption details"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
